<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();

        if ($user instanceof \App\Models\User) {
            $user->load('archivedJobs');
        }

        return view('profile', compact('user'));
    }
}
