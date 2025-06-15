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
    public $password;
    public $birth_date;
    public $email;
    public $phone_number;
    public $about;
    public $profile_picture;
    public $education;
    public $university;

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
        $this->register();
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
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'birth_date' => 'required|date',
                'password' => 'required|string',
            ]);
        } elseif ($this->currentStep == 2) {
            $this->validate([
                'about' => 'nullable|string|max:500',
                'profile_picture' => 'nullable|image|max:1024', // 1MB max
            ]);
            if ($this->hasFile('profile_picture')) {
                $this->file('profile_picture')->store('profile_pictures', 'public');
            } else {
                $this->file('img/default.jpg');
            }
        } elseif ($this->currentStep == 3) {
            $this->validate([
                'phone_number' => 'nullable|string|max:15',
                'education' => 'required|string|max:255',
                'university' => 'nullable|string|max:255',
            ]);
        }

        User::Create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'education' => $this->education,
            'birth_date' => $this->birth_date,
            'university' => $this->university,
            'phone_number' => $this->phone_number,
            'profile_picture' => $this->profile_picture,
        ]);
        
        return redirect()->route('login')->with('success', 'Registration successful');
    }

    public function submit()
    {
        $this->resetErrorBag();
    }
}
