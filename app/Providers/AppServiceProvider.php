<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Response;

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
        Paginator::useBootstrap();
        Response::macro('success',function($data='',$message='',$code='201'){
            return response()->json([
                'data'=>$data,
                'message'=>$message,
            ],$code);
        });

        Response::macro('error',function($message='' , $code='404'){
            return response()->json([
                'message'=>$message,
            ],$code);
        });
    }
}
