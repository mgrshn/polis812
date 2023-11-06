<?php

namespace Src\Api;

interface IUsersApi
{
    public function getAllUsers(string $endpoint): array;

    public function getUserWithId(int $id, $endpoint): array;

    public function getUsersWithIds(array $ids): array;
}