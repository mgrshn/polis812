<?php

namespace Src\Api;

class UsersApi extends Api implements IUsersApi
{
    private const ENDPOINT = "https://jsonplaceholder.typicode.com/users/";

    public function getAllUsers(string $endpoint = self::ENDPOINT): array
    {
        $users = $this->getAll($endpoint);
        return $users;
    }

    public function getUserWithId(int $id, $endpoint = self::ENDPOINT): array
    {
        $user = $this->getByUserId($endpoint, $id);
        return $user;
    }

    public function getUsersWithIds(array $ids): array
    {
        $users = array_reduce($ids, function ($acc, $id) {
            $user = $this->getUserWithId($id);
            if (empty($user)) {
                return $acc;
            }
            $acc[] = $this->getUserWithId($id);
            return $acc;
        }, []);
        return $users;
    }
}