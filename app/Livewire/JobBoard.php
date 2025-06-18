<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class JobBoard extends Component
{
    public function archiveJob($jobId)
    {
        if (!Auth::check()) {
            session()->flash('error', 'You need to log in to archive jobs.');
            return;
        }

        $user = Auth::user();

        // Cegah archive duplikat
        $alreadyArchived = $user->archivedJobs()->where('job_id', $jobId)->exists();

        if ($alreadyArchived) {
            session()->flash('message', 'Job already archived.');
            return;
        }

        $user->archivedJobs()->attach($jobId);

        session()->flash('message', 'Job archived successfully.');
    }


    public $jobs;
    public $selectedJob = null;

    public function mount()
    {
        $this->jobs = Job::latest()->get();
    }

    public function selectJob($jobId)
    {
        $this->selectedJob = Job::find($jobId);
    }

    public function render()
    {
        return view('livewire.job-board');
    }
}
