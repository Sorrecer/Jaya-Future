<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class trainingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $trainings = Job::where('job_kind', 'Training')->latest()->paginate(10);
        if (Auth::user()->role === 'admin') {
            return view('admin.training.index', compact('trainings'));
        }
        return view('admin.training.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.training.create');
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
            'job_kind' =>$request->job_kind,
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

        return redirect()->route('admin.training.index')->with('success', 'training successfully added!');
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
        $trainings = Job::findOrFail($id);

        return view('admin.training.edit', compact('trainings'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $trainings = Job::findOrFail($id);

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

        $trainings->update([
            'title' => $request->title,
            'job_kind' => $request->job_kind,
            'company_name' => $request->company_name,
            'location' => $request->location,
            'category' => $request->category,
            'job_type' => $request->job_type,
            'description' => $request->description,
            'requirement' => $request->requirement,
            'benefit' => $request->benefit,
            'company_logo' => $logoPath ?? $trainings->company_logo,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.training.index')->with('success', 'training successfully added!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $trainings = Job::findOrFail($id);
        $trainings->delete();

        return redirect()->route('admin.training.index')->with('success', 'Training Successfully Deleted');
    }
}
