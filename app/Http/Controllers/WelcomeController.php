<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller
{
    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()
    {
        $className = 'nav-home';

        return view('welcome', compact('className'));
    }

    public function about()
    {
        $className = 'nav-home';

        return view('about', compact('className'));
    }
}
