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
        $internships = Job::where('job_kind', 'Internship')->get();
        return view('admin.internship.index', compact('internships'));
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
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'job_kind' => 'required',
            'description' => 'required|string',
            'company_name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'job_type' => 'required|in:On Site,Hybrid,Remote',
            'requirement' => 'required|string',
            'benefit' => 'required|string',
            'company_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required',
            'date_posted' => 'date',
        ]);

        if ($request->hasFile('company_logo')) {
            $validated['company_logo'] = $request->file('company_logo')->store('company_logos', 'public');
        }

        Job::create([
            'title' => 'Test Internship',
            'job_kind' => 'Internship',
            'company_name' => 'Test Corp',
            'location' => 'Jakarta',
            'category' => 'IT',
            'job_type' => 'On Site',
            'description' => 'Test description',
            'requirement' => 'Test requirement',
            'benefit' => 'Test benefit',
            'status' => 'Open',
            'date_posted' => now(),
        ]);

        return redirect()->route('admin.internship.index')->with('success', 'Internship created successfully.');
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
