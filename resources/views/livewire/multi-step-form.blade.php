<div class="container mt-5 form-multi-step">


    <form wire:submit.prevent="register" method="post" enctype="multipart/form-data">
        @csrf

        {{-- multi step - 1 --}}

        @if ($currentStep == 1)
            <div class="progress rounded-pill mb-4" style="height: 5px;">
                <div class="progress-bar-fill rounded-pill" style="width:33%;"></div>
            </div>

            <h2 class="fw-bold mb-4 pe-4">Give Us Your Primary Information</h2>

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
                    <label class="birth_date" id="birth_date">Birth Date</label>
                    <input type="date" name="birth_date" class="form-control" wire:model="birth_date">

                    <span class="text-danger">
                        @error('birth_date')
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
                    <label class="password">Password<span class="text-danger">*</span></label>
                    <input type="password" class="form-control" placeholder="Your Password" wire:model="password">

                    <span class="text-danger">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
        @endif

        {{-- multi step - 2 --}}

        @if ($currentStep == 2)
            <div class="progress rounded-pill mb-4" style="height: 5px;">
                <div class="progress-bar-fill rounded-pill" style="width:66%;"></div>
            </div>

            <h2 class="fw-bold mb-4">"Tell Us What Makes You a Great Candidate"</h2>
            <p style="color: #aaa; width:50%;">We use this to know about you and what yours interest</p>

            @csrf
            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="about" id="about">About</label>
                    <textarea class="form-control" name="about" id="about" rows="6" placeholder="Write about you.."
                        wire:model="about"></textarea>

                    <span class="text-danger">
                        @error('about')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="col-md-6">
                    <label class="profile_picture" id="profile_picture">Photo Profile</label>
                    <input type="file" name="profile_picture" class="form-control" wire:model="profile_picture">

                    <span class="text-danger">
                        @error('profile_picture')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
        @endif

        {{-- multi step - 3 --}}

        @if ($currentStep == 3)
            <div class="progress rounded-pill mb-4" style="height: 5px;">
                <div class="progress-bar-fill rounded-pill" style="width:100%;"></div>
            </div>

            <h2 class="fw-bold mb-4 pe-4">We will make sure your preferences Up to date
                What is Your Location?</h2>

            <p style="color: #aaa;">We use this to match you nearby offers.</p>

            @csrf
            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="education" id="education">Education</label>
                    <select wire:model="education" name="tingkat_pendidikan" id="tingkat_pendidikan" class="form-select">
                        <option value="">-- Pilih Tingkat Pendidikan --</option>
                        <option value="SMA">SMA/SMK</option>
                        <option value="D3">D3</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select>

                    <span class="text-danger">
                        @error('education')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="col-md-6">
                    <label class="university" id="university">University</label>
                    <input type="text" name="university" class="form-control" wire:model="university">

                    <span class="text-danger">
                        @error('university')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="col-md-6">
                    <label class="password">Phone Number<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" placeholder="Your Number" wire:model="password">

                    <span class="text-danger">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
        @endif

        <div class="d-flex justify-content-between mt-4">

            @if ($currentStep == 1)
                <div></div>
            @endif

            @if ($currentStep == 2 || $currentStep == 3)
                <button type="button" class="btn btn-primary" wire:click='previousStep()'>Back</button>
            @endif

            @if ($currentStep == 1 || $currentStep == 2)
                <button type="button" class="btn btn-primary" wire:click='nextStep()'>Next</button>
            @endif

            @if ($currentStep == 3)
                <button type="submit" class="btn btn-primary">submit</button>
            @endif
        </div>
    </form>
</div>
