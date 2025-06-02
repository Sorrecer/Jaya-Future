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

    public function mount(){
        $this->currentStep = 1;
    }

    public function nextStep()
    {
        if ($this->currentStep < $this->totalSteps) {
            $this->currentStep++;
        }
    }
    public function previousStep()
    {
        if ($this->currentStep > 1) {
            $this->currentStep--;
        }
    }

    public function render()
    {
        return view('livewire.multi-step-form');
    }
}
