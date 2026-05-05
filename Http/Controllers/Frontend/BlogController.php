<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class BlogController extends Controller
{

public function index($page = 1)
{
    $per_page = 6;
    $cacheKey = "wp_posts_page_{$page}_{$per_page}";
    $cached = Cache::remember($cacheKey, now()->addMinutes(5), function () use ($per_page, $page) {
        $response = Http::timeout(8)->get('https://elevateonemedia.com/elevate-blog/wp-json/wp/v2/posts', [
            'per_page' => $per_page,
            'page' => $page,
            '_embed' => 1,
        ]);

        if (! $response->successful()) {
            return [
                'posts' => [],
                'totalPages' => 1,
            ];
        }

        return [
            'posts' => $response->json() ?? [],
            'totalPages' => (int) ($response->header('X-WP-TotalPages') ?? 1),
        ];
    });

    $posts = $cached['posts'];
    $totalPages = $cached['totalPages'];

    return view('frontend.pages.blog', compact('posts','page','totalPages'));
}

    // Single blog
    public function single($slug)
    {
        $cacheKey = "wp_post_single_{$slug}";
        $data = Cache::remember($cacheKey, now()->addMinutes(10), function () use ($slug) {
            $response = Http::timeout(8)->get('https://elevateonemedia.com/elevate-blog/wp-json/wp/v2/posts', [
                'slug' => $slug,
                '_embed' => 1,
            ]);

            if (! $response->successful()) {
                return null;
            }

            $posts = $response->json();

            if (empty($posts)) {
                return null;
            }

            $post = $posts[0];

            $responses = Http::pool(function ($pool) use ($post) {
                return [
                    $pool->timeout(8)->get(
                        'https://elevateonemedia.com/elevate-blog/wp-json/wp/v2/categories',
                        ['per_page' => 10]
                    ),
                    $pool->timeout(8)->get(
                        'https://elevateonemedia.com/elevate-blog/wp-json/wp/v2/posts',
                        ['per_page' => 4, '_embed' => 1]
                    ),
                    $pool->timeout(8)->get(
                        'https://elevateonemedia.com/elevate-blog/wp-json/wp/v2/tags',
                        ['per_page' => 10]
                    ),
                    $pool->timeout(8)->get(
                        'https://elevateonemedia.com/elevate-blog/wp-json/wp/v2/posts',
                        ['per_page' => 3, 'exclude' => $post['id'], '_embed' => 1]
                    ),
                ];
            });

            return [
                'post' => $post,
                'categories' => $responses[0]->successful() ? ($responses[0]->json() ?? []) : [],
                'recent_posts' => $responses[1]->successful() ? ($responses[1]->json() ?? []) : [],
                'tags' => $responses[2]->successful() ? ($responses[2]->json() ?? []) : [],
                'related_posts' => $responses[3]->successful() ? ($responses[3]->json() ?? []) : [],
            ];
        });

        if (empty($data)) {
            abort(404);
        }

        $post = $data['post'];
        $categories = $data['categories'];
        $recent_posts = $data['recent_posts'];
        $tags = $data['tags'];
        $related_posts = $data['related_posts'];


        return view('frontend.pages.blogsingle', compact(
            'post',
            'categories',
            'recent_posts',
            'tags',
            'related_posts'
        ));
    }

}