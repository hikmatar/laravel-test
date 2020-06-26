<?php

namespace App\Providers;

use App\Repositories\CompanyRepository;
use App\Repositories\Interfaces\CompanyRepositoryInterface;
use App\Repositories\Interfaces\PositionRepositoryInterface;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\PositionRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider {
  public function register() {
    $this->app->bind(
        UserRepositoryInterface::class,
        UserRepository::class
    );
    $this->app->bind(
        CompanyRepositoryInterface::class,
        CompanyRepository::class
    );
    $this->app->bind(
        PositionRepositoryInterface::class,
        PositionRepository::class
    );
  }

  public function boot() {
    //
  }
}
