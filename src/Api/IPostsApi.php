<?php

namespace Src\Api;

interface IPostsApi
{
    public function getAllPosts(string $endpoint): array;

    public function getUserPosts(int $id, string $endpoint): array;

    public function createPost(string $title, string $body, int $userId): array;

    public function updatePost(int $postId, string $title, string $body, int $userId): array;

    public function patchPost(int $postId, string $fieldName, $newValue): array;

    public function deletePost(int $postId): array;
}