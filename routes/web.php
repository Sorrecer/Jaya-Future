<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/signup', function () {
    return view('signup.signup-1');
})->name('signup');

Route::get('/companies', function () {
    return view('companies');
});

Route::get('/jobs', function () {
    return view('jobs');
});
