<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except(['destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sessions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (auth()->attempt($validatedData)) {
            session()->flash('message', [
                'category' => 'success',
                'body' => 'You are now logged in!'
            ]);

            return redirect('/posts');
        }

        return redirect()
            ->back()
            ->withErrors(['Invalid credentials']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        auth()->logout();

        session()->flash('message', [
            'category' => 'danger',
            'body' => 'You are now logged out. See you soon!'
        ]);

        return back();
    }
}
