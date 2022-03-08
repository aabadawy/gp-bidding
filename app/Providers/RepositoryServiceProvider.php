<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(\App\Repositories\Contracts\LocationRepository::class, \App\Repositories\Eloquent\LocationRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\ProductRepository::class, \App\Repositories\Eloquent\ProductRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\VendorRepository::class, \App\Repositories\Eloquent\VendorRepositoryEloquent::class);

        $this->app->bind(\App\Repositories\Contracts\AuctionRepository::class, \App\Repositories\Eloquent\AuctionRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\AucctionProductRepository::class, \App\Repositories\Eloquent\AucctionProductRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\AuctionRatingRepository::class, \App\Repositories\Eloquent\AuctionRatingRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\OrderRepository::class, \App\Repositories\Eloquent\OrderRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\BiddingRepository::class, \App\Repositories\Eloquent\BiddingRepositoryEloquent::class);
        //:end-bindings:
    }
}