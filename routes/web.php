<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dhaka', function () {
    return 'Hello Dhaka..!';
});
