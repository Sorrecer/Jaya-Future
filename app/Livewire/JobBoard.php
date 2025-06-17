<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Job;

class JobBoard extends Component
{
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
