<?php

namespace App\Http\Controllers;

use App\Models\Job;

class HomeController extends Controller
{
    public function index()
    {
        $latestJobs = Job::where('status', 'Open')->latest()->take(4)->get();

        return view('home', compact('latestJobs'));
    }
}
