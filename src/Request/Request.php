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

    public function post(string $url, $data): array
    {
        $curl = curl_init();
        $options = [
            CURLOPT_URL => $url,
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_HTTPHEADER => ['Content-type: application/json; charset=UTF-8'],
        ];

        curl_setopt_array($curl, $options);
        $response = curl_exec($curl);

        return json_decode($response, true);
    }

    public function put(string $url, array $data): array
    {
        $curl = curl_init();
        $options = [
            CURLOPT_URL => $url,
            CURLOPT_CUSTOMREQUEST => "PUT",
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_HTTPHEADER => ['Content-type: application/json; charset=UTF-8'],
        ];

        curl_setopt_array($curl, $options);
        $response = curl_exec($curl);

        return json_decode($response, true);
    }

    public function patch(string $url, array $data): array
    {
        $curl = curl_init();
        $options = [
            CURLOPT_URL => $url,
            CURLOPT_CUSTOMREQUEST => "PATCH",
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_HTTPHEADER => ['Content-type: application/json; charset=UTF-8'],
        ];

        curl_setopt_array($curl, $options);
        $response = curl_exec($curl);

        return json_decode($response, true);
    }

    public function delete(string $url): array
    {
        $curl = curl_init();
        $options = [
            CURLOPT_URL => $url,
            CURLOPT_CUSTOMREQUEST => "DELETE",
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_HTTPHEADER => ['Content-type: application/json; charset=UTF-8'],
        ];

        curl_setopt_array($curl, $options);
        $response = curl_exec($curl);

        return json_decode($response, true);
    }
}