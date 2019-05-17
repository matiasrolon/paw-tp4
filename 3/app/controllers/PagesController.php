<?php

namespace App\Controllers;

class PagesController
{
    /**
     * Show the home page.
     */
    public function home()
    {
        return view('index');
    }

    /**
     * Show the about page.
     */
    public function about()
    {
        return view('about');
    }

}