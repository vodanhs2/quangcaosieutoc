<?php

namespace App\Providers;
use App\Form_Service;
use App\form_education;
use App\form_hotline;
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
        view()->composer('admin.layouts.menu',function($view){
            $count_form_service = Form_Service::count();
            $view->with('count_form_service',$count_form_service);
            $count_form_education = form_education::count();
             $view->with('count_form_education',$count_form_education);
              $count_form_hotline = form_hotline::count();
             $view->with('count_form_hotline',$count_form_hotline);
        });
    }
}
