<?php

namespace Client;

require_once __DIR__ . "/../vendor/autoload.php";

use Src\Api\UsersApi;
use Src\Api\PostsApi;
use Src\Api\TasksApi;

class JsonPlaceholderApi
{
    private UsersApi $users;
    private PostsApi $posts;
    private TasksApi $tasks;

    public function __construct()
    {
        $this->users = new UsersApi();
        $this->posts = new PostsApi();
        $this->tasks = new TasksApi();
    }

    public function getAllUsers(): array
    {
        return $this->users->getAllUsers();
    }

    public function getAllPosts(): array
    {
        return $this->posts->getAllPosts();
    }

    public function getAllTasks(): array
    {
        return $this->tasks->getAllTasks();
    }

    public function getUserById(int $id): array
    {
        return $this->users->getUserWithId($id);
    }

    public function getUsersByIds(array $ids): array
    {
        return $this->users->getUsersWithIds($ids);
    }

    public function getUserPosts(int $id): array
    {
        return $this->posts->getUserPosts($id);
    }

    public function getUserTasks(int $id): array
    {
        return $this->tasks->getUserTasks($id);
    }

    public function createPost(string $title, string $body, int $userId): array
    {
        return $this->posts->createPost($title, $body, $userId);
    }

    public function updatePost(int $postId, string $title, string $body, int $userId): array
    {
        return $this->posts->updatePost($postId, $title, $body, $userId);
    }

    public function patchPost(int $postId, string $fieldName, string $newValue): array
    {
        return $this->posts->patchPost($postId, $fieldName, $newValue);
    }

    public function deletePost(int $postId): array
    {
        return $this->posts->deletePost($postId);
    }
}

$apiClient = new JsonPlaceholderApi();

$tasks = $apiClient->getUserTasks(1);
print_r($tasks);
