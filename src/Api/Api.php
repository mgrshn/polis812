<?php

namespace Src\Api;

use Src\Request\Request;

abstract class Api
{
    private Request $request;

    function __construct()
    {
        $this->request = new Request();
    }

    public function request(): Request
    {
        return $this->request;
    }

    public function getAll(string $endpoint): array
    {
        $result = $this->request()->get($endpoint);
        return $result;
    }
    
    public function getByUserId(string $endpoint, int $id): array
    {
        $endpoint = strpos($endpoint, "users") ? "$endpoint/$id" : "$endpoint?userId=$id";
        $result = $this->request()->get($endpoint);
        return $result;
    }
}