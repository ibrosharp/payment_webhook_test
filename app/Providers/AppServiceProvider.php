<?php

namespace App\Providers;

use App\Services\PaymentServices\IPaymentService;
use App\Services\PaymentServices\PaystackPaymentService;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);

        $this->app->bind(IPaymentService::class, function ($app) {
            return new PaystackPaymentService();
        });
        
       

    }
}
