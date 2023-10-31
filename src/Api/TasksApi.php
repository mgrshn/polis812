<?php

namespace Src\Api;

class TasksApi extends Api
{
    private const ENDPOINT = "https://jsonplaceholder.typicode.com/tasks/";

    public function getAllTasks(string $endpoint = self::ENDPOINT): array
    {
        $tasks = $this->getAll($endpoint);
        return $tasks;
    }

    public function getUserTasks(int $id, string $endpoint = self::ENDPOINT)
    {
        $tasks = $this->getByUserId($endpoint, $id);
        return $tasks;
    }
}