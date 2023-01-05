<?php

namespace App\Providers;

use App\Models\Cash;
use App\Models\Party;
use View;
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
        View::composer('*',function($view){
            $view->with([
                'parties'    =>Party::orderBy('id','DESC')->get(), 
           ]);
        });
      
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
