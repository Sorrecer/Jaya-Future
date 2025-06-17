<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;


class jobController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $jobs = Job::latest()->get();  // Atau tambahkan where status = 'Open' jika mau filter
        return view('jobs', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.job.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'company_name' => 'required|string',
            'location' => 'required|string',
            'category' => 'required|string',
            'job_type' => 'required|string',
            'description' => 'required|string',
            'requirement' => 'required|string',
            'benefit' => 'required|string',
            'company_logo' => 'nullable|image|max:2048',
            'status' => 'required|in:Open,Closed,Paused',
        ]);

        $logoPath = null;
        if ($request->hasFile('company_logo')) {
            $logoPath = $request->file('company_logo')->store('logos', 'public');
        }

        Job::create([
            'title' => $request->title,
            'company_name' => $request->company_name,
            'location' => $request->location,
            'category' => $request->category,
            'job_type' => $request->job_type,
            'description' => $request->description,
            'requirement' => $request->requirement,
            'benefit' => $request->benefit,
            'company_logo' => $logoPath,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.job.create')->with('success', 'Job successfully added!');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $job = Job::findOrFail($id);
        return view('job-detail', compact('job'));
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
