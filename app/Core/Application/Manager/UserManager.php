<?php

namespace App\Core\Application\Manager;

use App\Core\Entities\UserEntity;
use App\Core\Application\Repository\Contracts\UserRepositoryInterface;

class UserManager
{
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function get()
    {
        return $this->userRepository->get();
    }

    public function add(UserEntity $user): void
    {
        $this->userRepository->add($user);
    }
    
    public function find(string $id): ? array
    {
        return $this->userRepository->find($id);
    }
}
