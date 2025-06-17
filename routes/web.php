<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InternshipController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\RegisteredController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/companies', function () {
    return view('companies');
})->name('companies');

Route::get('/jobs', [JobController::class, 'index'])->name('jobs');
Route::get('/jobs/{job}', [JobController::class, 'show'])->name('jobs.show');
Route::get('/submit-form/{job}', [ApplicationController::class, 'showForm'])->name('application.form');
Route::post('/submit-form', [ApplicationController::class, 'store'])->name('application.submit');


// Authenticated routes
Route::middleware('guest')->group(function () {

    // login 
    Route::get('/login', [AuthController::class, 'view'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    // register
    Route::get('/register', function () {
        return view('register');
    })->name('register');
});

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'show'])->name('profile');

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
    // dashboard 
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/jobs-admin', [DashboardController::class, 'jobsAdmin'])->name('jobs-admin');
    Route::resource('internship', InternshipController::class);
    Route::resource('job', JobController::class);
    Route::resource('training', TrainingController::class);

    // Job Opportunities management
    Route::get('/post-submitted', [DashboardController::class, 'postSubmitted'])->name('post-submitted');
    Route::get('/applicant', [DashboardController::class, 'applicant'])->name('applicant');
});
