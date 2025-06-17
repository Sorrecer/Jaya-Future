@extends('layout.dashboard')

@section('container')
<div class="container my-5" style="max-width: 700px;">
    <h2 class="my-5">Job Information</h2>
    <form action="" method="POST">
        @csrf
        <div class="mb-4">
            <label class="form-label">Job Type</label>
            <input type="text" class="form-control" name="job_type" placeholder="e.g., Full-time, Part-time, Internship" required>
        </div>

        <div class="mb-4">
            <label for="job_title" class="form-label">Job Title</label>
            <input type="text" class="form-control" id="job_title" name="job_title" placeholder="Write Job Title">
        </div>

        <div class="mb-4">
            <label for="position_description" class="form-label">Describe Your Position *</label>
            <textarea class="form-control" id="position_description" name="position_description" rows="10" style="min-height: 200px;" placeholder="Use at least 200 character"></textarea>
        </div>

        <div class="mb-4">
            <label for="company_journey" class="form-label">What Makes Your Company's Journey Unique?</label>
            <textarea class="form-control" id="company_journey" name="company_journey" rows="10" style="min-height: 200px;" placeholder="Write at least 200 character"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Continue</button>
    </form>
</div>
@endsection