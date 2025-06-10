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

Route::get('/sign-in', function () {
    return view('signin');
})->name('signin');

Route::get('/sign-up', function () {
    return view('signup');
})->name('signup');

Route::get('/companies', function () {
    return view('companies');
});

Route::get('/jobs', function () {
    return view('jobs');
});

Route::get('/profile', function () {
    return view('profile');
});
