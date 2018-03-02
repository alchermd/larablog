<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;
use App\Post;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layout.archives', function (View $view) {
            $archives = Post::selectRaw(
                'year(created_at) year, monthname(created_at) month, count(*) published'
            )->groupBy('year', 'month')->get()->toArray();

            return $view->with(compact('archives'));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
