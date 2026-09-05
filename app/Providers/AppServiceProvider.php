<?php

namespace App\Providers;
use App\Models\CartItems;
use App\Policies\CartItemPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;


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
      if (str_contains(config('app.url'), 'https://')) {
    \URL::forceScheme('https');
}
        // i am unguarding the model
        Gate::policy(CartItems::class, CartItemPolicy::class);
        Model::unguard();
    }
}
