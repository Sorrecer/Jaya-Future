<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;
use Livewire\WithFileUploads;

class MultiStepForm extends Component
{

    use WithFileUploads;

    public $name;
    public $email;
    public $password;
    public $birth_date;
    public $university;
    public $phone_number;
    public $profile_picture;
    public $employment_status;
    public $job_title;
    public $location;
    public $resume;

    public $totalSteps = 3;
    public $currentStep = 1;

    public function mount()
    {
        $this->currentStep = 1;
    }

    public function nextStep()
    {
        // lanjut ke halaman berikutnya settelah validasi data
        $this->resetErrorBag(); // Reset error messages
        if ($this->currentStep < $this->totalSteps) {
            $this->currentStep++;
        }
    }
    public function previousStep()
    {
        // lanjut ke halaman berikutnya settelah validasi data
        $this->resetErrorBag(); // Reset error messages
        if ($this->currentStep > 1) {
            $this->currentStep--;
        }
    }

    public function render()
    {
        return view('livewire.multi-step-form');
    }

    public function register()
    {
        if ($this->currentStep == 1) {

            $this->validate([
                'email' => 'required|email|max:255',
                'password' => 'required|string',
            ]);
        } elseif ($this->currentStep == 2) {
            $this->validate([
                'profile_picture' => 'nullable|image|max:1024|mimes:png,jpg', // 1MB max
                'name' => 'required|string|max:255',
                'birth_date' => 'required|date',
                'location' => 'nullable|string|max:255',
            ]);
            if ($this->profile_picture) {
                $picturePath = $this->profile_picture->store('profile_pictures', 'public');
            } else {
                $picturePath = 'img/default.jpg'; // Default profile picture
            }
        } elseif ($this->currentStep == 3) {
            $this->validate([
                'phone_number' => 'nullable|string|max:15',
                'university' => 'nullable|string|max:255',
                'employment_status' => 'nullable|string|max:255',
                'job_title' => 'nullable|string|max:255',
                'resume' => 'nullable|file|mimes:pdf,doc,docx|max:2048', // 2MB max
            ]);
            if ($this->resume) {
                $resumePath = -$this->resume->store('resumes', 'public');
            }
        }

        User::Create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'birth_date' => $this->birth_date,
            'university' => $this->university,
            'phone_number' => $this->phone_number,
            'employment_status' => $this->employment_status,
            'job_title' => $this->job_title,
            'location' => $this->location,
            'profile_picture' => $this->profile_picture,
            'resume' => $this->resume,
        ]);
        
        return redirect()->route('login')->with('success', 'Registration successful');
    }

    public function submit()
    {
        $this->resetErrorBag();
    }
}
