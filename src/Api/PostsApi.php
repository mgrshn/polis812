<?php

namespace Src\Api;

class PostsApi extends Api implements IPostsApi
{
    private const ENDPOINT = "https://jsonplaceholder.typicode.com/posts/";

    public function getAllPosts(string $endpoint = self::ENDPOINT): array
    {
        $posts = $this->getAll($endpoint);
        return $posts;
    }

    public function getUserPosts(int $id, string $endpoint = self::ENDPOINT): array
    {
        $posts = $this->getByUserId($endpoint, $id);
        return $posts;
    }

    public function createPost(string $title, string $body, int $userId): array
    {
        $data = [
            "title" => $title,
            "body" => $body,
            "userId" => $userId
        ];

        $response = $this->request()->post(self::ENDPOINT, $data);
        return $response;
    }

    public function updatePost(int $postId, string $title, string $body, int $userId): array
    {
        $data = [
            "title" => $title,
            "body" => $body,
            "userId" => $userId
        ];

        $response = $this->request()->put(self::ENDPOINT . $postId, $data);
        return $response;
    }

    public function patchPost(int $postId, string $fieldName, $newValue): array
    {
        $endpoint = self::ENDPOINT . $postId;
        $data = [$fieldName => $newValue];

        switch ($fieldName) {
            case "title":
                $response = $this->request()->patch($endpoint, $data);
                break;
            case "body":
                $response = $this->request()->patch($endpoint, $data);
                break;
            case "userId":
                $response = $this->request()->patch($endpoint, $data);
                break;
            default:
                $response = [];
        }

        return $response;
    }

    public function deletePost(int $postId): array
    {
        $endpoint = self::ENDPOINT . $postId;

        $response = $this->request()->delete($endpoint);
        return $response;
    }
}