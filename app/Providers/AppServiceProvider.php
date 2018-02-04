<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;


use App\Repositories\BaseRepository;
use App\Repositories\InterfaceRepository;
use App\Repositories\UserRepository;
use App\Repositories\ArticleRepository;
use App\Repositories\CommentRepository;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(InterfaceRepository::class,ArticleRepository::class);
        $this->app->singleton(InterfaceRepository::class,CommentRepository::class);
        $this->app->singleton(InterfaceRepository::class,UserRepository::class);

    }
}
