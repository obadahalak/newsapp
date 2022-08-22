<?php

namespace App\Providers;

use Illuminate\Support\Facades\Response;
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
        Response::macro('success',function($data='',$message='',$code='201'){
            return response()->json([
                'data'=>$data,
                'message'=>$message,
            ],$code);
        });

        Response::macro('error',function($message=''){
            return response()->json([
                'message'=>$message,
            ],404);
        });
    }
}
