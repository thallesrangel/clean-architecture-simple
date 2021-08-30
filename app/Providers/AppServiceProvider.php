<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Core\Application\Repository\Contracts\UserRepositoryInterface;
use App\Core\Application\Repository\UserRepository;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
    }
}
