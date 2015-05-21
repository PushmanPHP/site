<?php namespace App\Http\Controllers;

class DemoController extends Controller {

    public function index()
    {
        $className = 'nav-home';
        return view('demo.index', compact('className'));
    }
}
