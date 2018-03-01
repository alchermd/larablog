<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function home()
    {
        if (auth()->check()) {
            return redirect('/posts');
        }

        return view('pages.home');
    }
}
