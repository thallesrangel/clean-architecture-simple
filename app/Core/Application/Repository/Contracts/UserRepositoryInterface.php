<?php

namespace App\Core\Application\Repository\Contracts;

use App\Core\Entities\UserEntity;

interface UserRepositoryInterface
{
    public function get();
    public function add(UserEntity $user): void;
    public function find(string $id);
}
