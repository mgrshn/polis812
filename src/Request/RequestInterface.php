<?php

namespace Src\Request;

interface RequestInterface
{
    public function get(string $url): array;

    public function post(string $url, array $data): array;

    public function put(string $url, array $data): array;

    public function patch(string $url, array $data): array;

    public function delete(string $url): array;
}