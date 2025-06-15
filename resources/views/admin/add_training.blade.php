@extends('layout.main')

@section('container')
<div class="container my-5" style="max-width: 700px;">
    <h2 class="my-5">Company Information</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-5">
            <label for="founded_year" class="form-label">Founded Year*</label>
            <select class="form-select" id="founded_year" name="founded_year">
                <option value="">Select Founded Year</option>
                @for ($year = date('Y'); $year >= 1900; $year--)
                <option value="{{ $year }}">{{ $year }}</option>
                @endfor
            </select>
        </div>

        <div class="mb-5">
            <label for="company_size" class="form-label">Company Size*</label>
            <select class="form-select" id="company_size" name="company_size">
                <option value="">Select Company Size</option>
                <option value="1-50">1-50</option>
                <option value="51-200">51-200</option>
                <option value="201-500">201-500</option>
                <option value="500+">500+</option>
            </select>
        </div>

        <div class="mb-5">
            <label for="logo" class="form-label">Upload Your Logo*</label>
            <input class="form-control" type="file" id="logo" name="logo" accept="image/*">
        </div>

        <div class="mb-5">
            <label for="other_branches" class="form-label">Other Branches Of Office</label>
            <select class="form-select" id="other_branches" name="other_branches">
                <option value="">Select Branch Size</option>
                <option value="1-50">1-50</option>
                <option value="51-200">51-200</option>
                <option value="201-500">201-500</option>
                <option value="500+">500+</option>
            </select>
        </div>

        <div class="mb-5">
            <label class="form-label">Company Locations</label>
            <div class="d-flex flex-wrap gap-2">
                <span class="badge rounded-pill bg-light text-dark border">Milan</span>
                <span class="badge rounded-pill bg-light text-dark border">Berlin</span>
                <span class="badge rounded-pill bg-light text-dark border">Florance</span>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Continue</button>
    </form>
</div>
@endsection