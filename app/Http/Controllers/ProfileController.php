<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show()
    {
        // Ambil user yang sedang login
        $user = Auth::user();

        // Kirim user ke view
        return view('profile', compact('user'));
    }
}
