<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisteredController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');

// Authenticated routes
Route::middleware('guest')->group(function () {

    // login 

    Route::get('/login', [AuthController::class, 'view'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    // register

    Route::get('/register', [RegisteredController::class, 'view'])->name('register');
    Route::post('/register', [RegisteredController::class, 'register']);
});

Route::middleware('auth')->group(function () {

    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');

    Route::get('/submit-form', function () {
        return view('upload-resume');
    })->name('submit-form');

    Route::get('/submitted', function () {
        return view('submitted');
    })->name('submitted');

    // logout 
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/jobs-admin', [DashboardController::class, 'jobsAdmin'])->name('jobs-admin');


    // Add more admin routes here

});


Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});


Route::get('/companies', function () {
    return view('companies');
})->name('companies');

Route::get('/jobs', function () {
    return view('jobs');
})->name('jobs');
