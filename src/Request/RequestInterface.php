<?php

namespace Src\Request;

interface RequestInterface
{
    public function get(string $url): array;

    public function post(string $url, string $action, array $data): bool;

    public function put(string $url, string $action, array $data): bool;

    public function patch(string $url, string $action, array $data): bool;

    public function delete(string $url, string $action, array $data): bool;
}