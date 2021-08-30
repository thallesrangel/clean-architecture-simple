<?php

namespace App\Core\Application\Repository;

use App\Core\Application\Repository\Contracts\UserRepositoryInterface;
use App\Core\Entities\UserEntity;
use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    private $userModel;

    public function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }

    public function get()
    {
        $result = $this->userModel->all()->toArray();

        if  ($result == false) return null;
        
        return $result;
    }

    public function add(UserEntity $userEntity): void
    {
        $this->userModel->create([
            'first_name' => $userEntity->getFirstName(),
            'last_name' => $userEntity->getLastName(),
            'email' => $userEntity->getEmail()
        ]);
    }

    public function find(string $id): ? array
    {
        $result = $this->userModel->find($id)->toArray();

        if  ($result == false) return null;
        
        return $result;
    }
}
