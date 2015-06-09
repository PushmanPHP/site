<?php

namespace app\Http\Controllers;

class DocsController extends Controller
{
    public function index()
    {
        $className = 'nav-home';

        return view('docs.index', compact('className'));
    }
}
