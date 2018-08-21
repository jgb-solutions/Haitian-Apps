<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('pages.home', [
            'title' => 'Showcasing the best Haitian Products'
        ]);
    }

    public function categories()
    {
        return view('pages.categories', [
            'title' => 'Showcasing the best Haitian Products'
        ]);
    }

    public function about()
    {
        return view('pages.about', [
            'title' => 'About Us'
        ]);
    }

    public function contact()
    {
        return view('pages.contact', [
            'title' => "Let's Get In Touch"
        ]);
    }
}
