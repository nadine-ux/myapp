<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;


use Illuminate\Support\Facades\Schema;
use ConsoleTVs\Charts\Registrar as Charts;
use App\Charts\OrdersChart;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    protected $namespace = 'App\\Http\\Controllers';

    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Charts $charts)
    {
        Schema::defaultStringLength(191);

        
        
    $charts->register([
        OrdersChart::class
    ]);
    
    }
}
