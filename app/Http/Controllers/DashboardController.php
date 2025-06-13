<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        return view('admin.dashboard');
    }

    public function jobsAdmin()
    {
        return view('admin.jobs-admin');
    }

    public function post1()
    {
        return view('admin.post1');
    }
    public function post2()
    {
        return view('admin.post2');
    }
    public function post3()
    {
        return view('admin.post3');
    }

    public function postSubmitted()
    {
        return view('admin.post-submitted');
    }
}
