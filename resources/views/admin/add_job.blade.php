@extends('layout.main')

@section('container')
<div class="container my-5" style="max-width: 700px;">
    <h2 class="my-5">Basic Information</h2>
    <form action="" method="POST">
        @csrf
        <div class="mb-4">
            <label for="job_title" class="form-label">Job Title</label>
            <input type="text" class="form-control" id="job_title" name="job_title" placeholder="UI/UX Designer">
        </div>

        <div class="mb-4">
            <label for="company_name" class="form-label">Company Name*</label>
            <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Write Your Company Name">
        </div>

        <div class="mb-4">
            <label for="location" class="form-label">Location*</label>
            <input type="text" class="form-control" id="location" name="location" placeholder="Select Your Location">
        </div>

        <div class="mb-4">
            <label for="category" class="form-label">Category*</label>
            <select class="form-select" id="category" name="category">
                <option value="">Select Your Category</option>
                <option value="IT">IT</option>
                <option value="Design">Design</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Continue</button>
    </form>
</div>
@endsection