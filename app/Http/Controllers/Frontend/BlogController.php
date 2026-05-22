<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Services\BlogPostService;

class BlogController extends Controller
{
    public function __construct(
        private readonly BlogPostService $blogPosts
    ) {}

    public function index($page = 1)
    {
        $page = max(1, (int) $page);
        $perPage = 6;

        $result = $this->blogPosts->getPaginated($page, $perPage);

        return view('frontend.pages.blog', [
            'posts' => $result['posts'],
            'page' => $page,
            'totalPages' => $result['totalPages'],
        ]);
    }

    public function single($slug)
    {
        $post = $this->blogPosts->findBySlug($slug);

        if (! $post) {
            abort(404);
        }

        return view('frontend.pages.blogsingle', [
            'post' => $post,
            'categories' => $this->blogPosts->getCategories(),
            'recent_posts' => $this->blogPosts->getLatestPosts(4),
            'tags' => $this->blogPosts->getTags(),
            'related_posts' => $this->blogPosts->getRelatedPosts($slug, 3),
        ]);
    }
}
