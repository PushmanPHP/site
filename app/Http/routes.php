<?php

$app->get('/', 'App\Http\Controllers\WelcomeController@index');
$app->get('documentation', 'App\Http\Controllers\DocsController@index');
$app->get('about', 'App\Http\Controllers\WelcomeController@about');
$app->get('settings', 'App\Http\Controllers\WelcomeController@settings');
$app->get('demo', 'App\Http\Controllers\DemoController@index');