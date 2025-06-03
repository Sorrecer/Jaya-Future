<?php

namespace App\Livewire;

use Livewire\Component;

class MultiStepForm extends Component
{
    public $name;
    public $lastname;
    public $email;
    public $phone;
    public $city;
    public $postal;
    public $salary;
    public $payment;
    public $offer;

    public $totalSteps = 4;
    public $currentStep = 1;

    public function mount()
    {
        $this->currentStep = 1;
    }

    public function nextStep()
    {
        // lanjut ke halaman berikutnya settelah validasi data
        $this->resetErrorBag(); // Reset error messages
        $this->validateData();
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

    public function validateData()
    {
        if ($this->currentStep == 1) {

            $this->validate([
                'name' => 'required|string|max:255',
                'lastname' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:15',
            ]);
        } elseif ($this->currentStep == 2) {
            $this->validate([
                'city' => 'required|string|max:255',
                'postal' => 'required|numeric|max:5',
            ]);
        } elseif ($this->currentStep == 3) {
            $this->validate([
                'salary' => 'required|numeric|min:0',
                'payment' => 'required|string|max:50',
            ]);
        } 
    }

    public function submit()
    {
        $this->resetErrorBag();
        if ($this->currentStep == 4) {
            $this->validate([
                'offer' => 'required|string|max:500',
            ]);
        }
    }
}
