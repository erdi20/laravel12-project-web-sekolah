<?php

namespace App\Providers;

use App\Models\School;
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
        View::composer([
            'components.partials.navbar',
            'components.partials.footer',
            'components.layouts.app'
        ],
            function ($view) {
                $school = School::first();

                $view->with('school', $school);
            });
    }
}
