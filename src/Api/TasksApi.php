<?php

namespace Src\Api;

class TasksApi extends Api implements ITasksApi
{
    private const ENDPOINT = "https://jsonplaceholder.typicode.com/todos/";

    public function getAllTasks(string $endpoint = self::ENDPOINT): array
    {
        $tasks = $this->getAll($endpoint);
        return $tasks;
    }

    public function getUserTasks(int $id, string $endpoint = self::ENDPOINT): array
    {
        $tasks = $this->getByUserId($endpoint, $id);
        return $tasks;
    }
}