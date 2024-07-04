<?php

namespace App\Providers;

use App\Repositories\Cart\CartRepository;
use App\Repositories\Cart\CartRepositoryInterface;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class CartSerivceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // $this->app->bind
        App::bind(CartRepositoryInterface::class , function (){
            return new CartRepository();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
