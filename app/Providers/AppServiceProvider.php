<?php

namespace App\Providers;
use App\Models\CartItems;
use App\Policies\CartItemPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // i am unguarding the model
        Gate::policy(CartItems::class, CartItemPolicy::class);
        Model::unguard();
    }
}
