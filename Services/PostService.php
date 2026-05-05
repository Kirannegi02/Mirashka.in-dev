<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class PostService
{
    public function getLatestPosts($limit = 6)
    {
        $api = "https://elevateonemedia.com/elevate-blog/wp-json/wp/v2/posts?per_page={$limit}&_embed";

        try {
            $response = Http::timeout(8)->get($api);

            if (! $response->successful()) {
                return [];
            }

            return $response->json() ?? [];
        } catch (\Throwable $e) {
            Log::warning('Failed fetching latest posts', [
                'message' => $e->getMessage(),
            ]);
            return [];
        }
    }
}