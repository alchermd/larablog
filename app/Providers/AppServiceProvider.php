<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;
use App\Post;
use App\Tag;

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

        view()->composer('layout.tags', function (View $view) {
            $tags = Tag::has('posts')->get();

            return $view->with(compact('tags'));
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
