<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\View;
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
        // Singleton for global access
        app()->singleton('usernya', function () {
            $domain = request()->getHost();
            return User::where('web','like', '%'.$domain.'%')
            ->with(['experiences', 'skills', 'projects', 'socials', 'educations','certificates', 'expertises'])->first();
        });
    
        // Share with all views
        View::composer('*', function ($view) {
            $view->with('usernya', app('usernya'));
        });

        // dd($usernya);
    }
}
