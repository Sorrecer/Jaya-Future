<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class internshipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin.internship.index');
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.internship.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'company_name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'categoty' => 'required|string|max:255',
            'job_type' => 'required|in:On Site,Hybrid,Remote',
            'requirement' => 'required|string',
            'benefit' => 'required|string',
            'company_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('company_logo')) {
            $request->validate([
                'company_logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        }

        Job::Create([
            'title' => $request->title,
            'job_kind' => 'Internship',
            'company_name' => $request->company_name,
            'location' => $request->location,
            'category' => $request->categoty,
            'job_type' => $request->job_type,
            'description' => $request->description,
            'requirement' => $request->requirement,
            'benefit' => $request->benefit,
            'company_logo' => $request->file('company_logo')->store('logos', 'public'),
        ]);
        


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
