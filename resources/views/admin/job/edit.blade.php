@extends('layout.dashboard')

@section('container')
    <div class="container my-5" style="max-width: 700px;">
        <h2 class="my-5">Edit Job Information</h2>
        <form action="" method="POST"  enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="title" class="form-label">Job Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Write Job Title" value="{{ old('title') }}">
            </div>

            <div class="mb-4">
                <input type="hidden" class="form-control" name="job_kind" value="Job">
            </div>

            <div class="mb-4">
                <label for="company_name" class="form-label">Company Name</label>
                <input type="text" class="form-control" id="company_name" name="company_name"
                    placeholder="Write Company Name" value="{{ old('company_name') }}">
            </div>

            <div class="mb-4">
                <label for="location" class="form-label">Location</label>
                <input type="text" class="form-control" id="location" name="location" placeholder="Write Job Location" value="{{ old('location') }}">
            </div>

            <div class="mb-4">
                <label for="category" class="form-label">Category</label>
                <input type="text" class="form-control" id="category" name="category">
            </div>

            <div class="mb-4">
                <label class="form-label">Job Type</label>
                <div class="d-flex flex-wrap gap-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="job_type" id="on_site" value="On Site">
                        <label class="form-check-label" for="on_site">On Site</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="job_type" id="hybrid" value="Hybrid">
                        <label class="form-check-label" for="hybrid">Hybrid</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="job_type" id="remote" value="Remote">
                        <label class="form-check-label" for="remote">Remote</label>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <label for="description" class="form-label">Job Description</label>
                <textarea class="form-control" id="description" name="description" rows="10" style="min-height: 200px;"
                    placeholder="Job Description">{{ old('description') }}</textarea>
            </div>

            <div class="mb-4">
                <label for="requirement" class="form-label">Requirement</label>
                <textarea class="form-control" id="requirement" name="requirement" rows="10" style="min-height: 200px;"
                    placeholder="Write Job Requirement">{{ old('requirement') }}</textarea>
            </div>

            <div class="mb-4">
                <label for="benefit" class="form-label">Benefits</label>
                <textarea class="form-control" id="benefit" name="benefit" rows="10" style="min-height: 200px;"
                    placeholder="Write Job Benefits">{{ old('benetif') }}</textarea>
            </div>

            <div class="mb-4">
                <label for="company_logo" class="form-label">Company Logo</label>
                <input type="file" class="form-control" id="company_logo" name="company_logo">
            </div>

            <div class="mb-4">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" aria-label="Default select example">
                    <option value="Open" selected>Open</option>
                    <option value="Closed">Closed</option>
                    <option value="Paused">Paused</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Continue</button>
        </form>
    </div>
@endsection
