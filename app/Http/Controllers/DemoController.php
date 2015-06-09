<?php namespace app\Http\Controllers;

use Pushman\PHPLib\Pushman;

class DemoController extends Controller
{
    public function index()
    {
        $className = 'nav-home';

        $pm = new Pushman(env('PUSHMAN_PRIVATE_KEY'));
        $token = $pm->token('public');
        $token = $token['token'];

        return view('demo.index', compact('className', 'token'));
    }
}
