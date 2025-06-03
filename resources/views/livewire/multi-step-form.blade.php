<div class="container mt-5 form-multi-step">
    {{-- multi step - 1 --}}

    @if ($currentStep == 1)
        <div class="progress rounded-pill mb-4" style="height: 5px;">
            <div class="progress-bar-fill rounded-pill" style="width:25%;"></div>
        </div>

        <h2 class="fw-bold mb-4 pe-4">Give Us Your Primary Information</h2>

        <form wire:submit.prevent="signup">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="name" id="name">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Write Your Name"
                        wire:model="name">

                    <span class="text-danger">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="col-md-6">
                    <label class="lastname" id="lastname">Last Name</label>
                    <input type="text" name="lastname" class="form-control" placeholder="Write Your Last Name"
                        wire:model="lastname">

                    <span class="text-danger">
                        @error('lastname')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-6">
                    <label class="email" id="email">Email<span class="text-danger">*</span></label>
                    <input type="email" name="email" class="form-control" placeholder="Your Email"
                        wire:model="email">

                    <span class="text-danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="col-md-6">
                    <label class="phone">Phone Number<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" wire:model="phone">

                    <span class="text-danger">
                        @error('phone')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
        </form>
    @endif

    {{-- multi step - 2 --}}

    @if ($currentStep == 2)
        <div class="progress rounded-pill mb-4" style="height: 5px;">
            <div class="progress-bar-fill rounded-pill" style="width:50%;"></div>
        </div>

        <h2 class="fw-bold mb-4 pe-4">We will make sure your preferences Up to date
            What is Your Location?</h2>

        <p style="color: #aaa;">We use this to match you nearby offers.</p>

        <form>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="city" id="name">City</label>
                    <input type="text" name="city" class="form-control" wire:model="city">

                    <span class="text-danger">
                        @error('city')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="col-md-6">
                    <label class="postal" id="postal">Postal Code</label>
                    <input type="text" name="postal" class="form-control" wire:model="postal">

                    <span class="text-danger">
                        @error('postal')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>

        </form>
    @endif

    {{-- multi step - 3 --}}

    @if ($currentStep == 3)
        <div class="progress rounded-pill mb-4" style="height: 5px;">
            <div class="progress-bar-fill rounded-pill" style="width:75%;"></div>
        </div>

        <h2 class="fw-bold mb-4">What is Minimum salary You want?</h2>
        <p style="color: #aaa; width:50%;">We use this to match you nearby offers that approximately pay this amount or
            more</p>

        <form>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="salary" id="salary">Minimum Salary Amount</label>
                    <input type="text" name="salary" class="form-control" wire:model="salary">

                    <span class="text-danger">
                        @error('salary')
                            {{ $message }}
                        @enderror
                    </span>
                    <p style="color: #aaa;">Amount is by rupiah</p>
                </div>
                <div class="col-md-6">
                    <label class="payment" id="payment">Payment Period</label>
                    <input type="text" name="payment" class="form-control" wire:model="payment">

                    <span class="text-danger">
                        @error('payment')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>

        </form>
    @endif

    {{-- multi step - 4 --}}

    @if ($currentStep == 4)
        <div class="progress rounded-pill mb-4" style="height: 5px;">
            <div class="progress-bar-fill rounded-pill" style="width:100%;"></div>
        </div>

        <h2 class="fw-bold mb-4">What Offer Are you looking for?</h2>
        <p style="color: #aaa;">This Helps us match you to relevant offers.</p>

        <form>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="offer" id="offer">Desired Offer title</label>
                    <input type="text" name="offer" class="form-control" wire:model="offer">

                    <span class="text-danger">
                        @error('offer')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>

        </form>
    @endif
    <div class="d-flex justify-content-between mt-4">

        @if ($currentStep == 1)
            <div></div>
        @endif

        @if ($currentStep == 2 || $currentStep == 3 || $currentStep == 4)
            <button type="button" class="btn btn-primary" wire:click='previousStep()'>Back</button>
        @endif

        @if ($currentStep == 1 || $currentStep == 2 || $currentStep == 3)
            <button type="button" class="btn btn-primary" wire:click='nextStep()'>Next</button>
        @endif

        @if ($currentStep == 4)
            <button type="submit" class="btn btn-primary">submit</button>
        @endif
    </div>
</div>
