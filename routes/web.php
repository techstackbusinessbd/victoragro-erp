<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('victoragro.pages.home');
});
