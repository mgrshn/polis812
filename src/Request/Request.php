<?php

namespace Src\Request;

use Src\Request\RequestInterface;

class Request implements RequestInterface
{
    public function get(string $url): array
    {
        $curl = curl_init();
        $options = [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => 1
        ];
        curl_setopt_array($curl, $options);
        $response = curl_exec($curl);

        return json_decode($response, true);
    }

    public function post(string $url, string $action, array $data): bool
    {
        $curl = curl_init();
        $options = [
            CURLOPT_URL => $url,
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_RETURNTRANSFER => 1
        ];
        curl_setopt_array($curl, $options);
        curl_exec($curl);

        return true;
    }

    public function put(string $url, string $action, array $data): bool
    {
        return true;
    }

    public function patch(string $url, string $action, array $data): bool
    {
        return true;
    }

    public function delete(string $url, string $action, array $data): bool
    {
        return true;
    }
}