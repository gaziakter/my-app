<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/dhaka', function () {
    return 'Hello Dhaka..!';
});

Route::get('/hello/{name}', [DemoController::class, 'DemoFunction']);
