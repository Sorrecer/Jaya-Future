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
})->name('companies');

Route::get('/jobs', function () {
    return view('jobs');
})->name('jobs');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/submit-form', function () {
    return view('upload-resume');
})->name('submit-form');

Route::get('/submitted', function () {
    return view('submitted');
})->name('submitted');
