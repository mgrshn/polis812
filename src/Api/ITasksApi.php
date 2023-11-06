<?php

namespace Src\Api;

interface ITasksApi
{
    public function getAllTasks(string $endpoint): array;

    public function getUserTasks(int $id): array;
}