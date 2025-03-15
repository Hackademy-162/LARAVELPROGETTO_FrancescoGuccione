<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/chi-siamo', function () {
    return view('about-us');
});

Route::get('/scopri', function () {
    return view('discover');
});

Route::get('/contattaci', function () {
    return view('contact-us');
});
