<?php

namespace App\Providers;

use App\Models\Department;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        View::composer('website.layout.footer', function ($view) {
            $departments = Department::where('is_active', true)
                ->orderBy('name')
                ->get();

            $view->with('departments', $departments);
        });
    }
}