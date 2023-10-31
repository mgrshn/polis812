<?php

namespace Src\Api;

interface IUsersApi
{
    public function getAll(string $endpoint): array;

    public function getByUserId(string $endpoint, int $id): array;

    public function getByIds(array $ids): array;
}