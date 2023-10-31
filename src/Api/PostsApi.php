<?php

namespace Src\Api;

class PostsApi extends Api
{
    private const ENDPOINT = "https://jsonplaceholder.typicode.com/posts/";

    public function getAllPosts($endpoint = self::ENDPOINT): array
    {
        $posts = $this->getAll($endpoint);
        return $posts;
    }

    public function getUserPosts(int $id, string $endpoint = self::ENDPOINT)
    {
        $posts = $this->getByUserId($endpoint, $id);
        return $posts;
    }
}