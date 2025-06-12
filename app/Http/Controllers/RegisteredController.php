<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class RegisteredController extends Controller
{
    //
    public function view()
    {
        return view('register');
    }

    public function store(Request $request) 
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'education' => 'required|string|max:255',
            'birdth_date' => 'required|date',
            'university' => 'nullable|string|max:255',
            'phone_number' => 'nullable|string|max:15',
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        // upload picture profil 

        if ($request->hasFile('profile_picture')){
            $picturePath = $request->file('profile_picture')->store('profile_pictures', 'public');
        }
        else{
            $picturePath =  'img/default.jpg' ;
        }

        $user = User::Create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'education' => $request->education,
            'birdth_date' => $request->birdth_date,
            'university' => $request->university,
            'phone_number' => $request->phone_number,
            'profile_picture' => $picturePath,
        ]);

        Auth::login($user);

        return Redirect::route('/register')->with('success', 'Registration successful');


    }
}
