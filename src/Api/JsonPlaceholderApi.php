<?php

namespace Src\Api;

require_once __DIR__ . "/../../vendor/autoload.php";

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
}

$api = new JsonPlaceholderApi();

$user = $api->getUsersByIds([88]);
print_r($user);