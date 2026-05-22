<?php

namespace App\Services;

class PostService
{
    public function __construct(
        private readonly BlogPostService $blogPosts
    ) {}

    public function getLatestPosts($limit = 6)
    {
        return $this->blogPosts->getLatestPosts((int) $limit);
    }
}
