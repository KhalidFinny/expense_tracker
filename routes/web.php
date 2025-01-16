<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); // This will load the landing page
});
