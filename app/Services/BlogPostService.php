<?php

namespace App\Services;

class BlogPostService
{
    public function all(): array
    {
        return array_map(
            fn (array $post) => $this->toWordPressShape($post),
            config('blog_posts.posts', [])
        );
    }

    public function getPaginated(int $page, int $perPage): array
    {
        $all = $this->all();
        $totalPages = max(1, (int) ceil(count($all) / $perPage));

        return [
            'posts' => array_slice($all, ($page - 1) * $perPage, $perPage),
            'totalPages' => $totalPages,
        ];
    }

    public function findBySlug(string $slug): ?array
    {
        foreach ($this->all() as $post) {
            if ($post['slug'] === $slug) {
                return $post;
            }
        }

        return null;
    }

    public function getLatestPosts(int $limit = 3): array
    {
        return array_slice($this->all(), 0, $limit);
    }

    public function getRelatedPosts(string $slug, int $limit = 3): array
    {
        $related = array_values(array_filter(
            $this->all(),
            fn (array $post) => $post['slug'] !== $slug
        ));

        return array_slice($related, 0, $limit);
    }

    public function getCategories(): array
    {
        return config('blog_posts.categories', []);
    }

    public function getTags(): array
    {
        return config('blog_posts.tags', []);
    }

    private function toWordPressShape(array $post): array
    {
        $paragraphs = $post['paragraphs'] ?? [];
        $excerpt = strip_tags($paragraphs[0] ?? '');
        $contentHtml = collect($paragraphs)
            ->map(fn (string $p) => '<p>'.$p.'</p>')
            ->implode('');

        $imagePath = $post['image'] ?? 'assets/frontend/img/faq1.jpg';
        $imageUrl = str_starts_with($imagePath, 'http')
            ? $imagePath
            : asset($imagePath);

        $author = config('blog_posts.author', 'Mirashka');
        $category = $post['category'] ?? 'HR Insights';

        return [
            'id' => $post['id'],
            'slug' => $post['slug'],
            'image_alt' => $post['image_alt'] ?? $post['title'],
            'date' => ($post['date'] ?? now()->toDateString()).'T10:00:00',
            'title' => [
                'rendered' => $post['title'],
            ],
            'excerpt' => [
                'rendered' => $excerpt,
            ],
            'content' => [
                'rendered' => $contentHtml,
            ],
            '_embedded' => [
                'wp:featuredmedia' => [
                    ['source_url' => $imageUrl],
                ],
                'author' => [
                    ['name' => $author],
                ],
                'wp:term' => [
                    [
                        ['name' => $category],
                    ],
                ],
            ],
        ];
    }
}
