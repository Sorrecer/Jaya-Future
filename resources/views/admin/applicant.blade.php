@extends('layout.dashboard')

@section('container')
<div class="container py-5" style="max-width: 1000px;">
    <h2 class="fw-bold mb-4">Applicants</h2>

    <div class="d-flex mb-4">
        <input type="text" class="form-control me-2" placeholder="Search and Filter" style="max-width: 300px;">
        <button class="btn btn-outline-secondary">
            <i class="bi bi-sliders"></i> <!-- Bootstrap icon for filter -->
        </button>
    </div>

    @php
    $currentStatus = request()->route('status'); // safer
    @endphp

    <a href="{{ route('admin.applicant', 'Approved') }}"
        class="btn {{ $currentStatus == 'Approved' ? 'btn-primary' : 'btn-outline-secondary' }}">
        Approved
    </a>
    <a href="{{ route('admin.applicant', 'In Review') }}"
        class="btn {{ $currentStatus == 'In Review' ? 'btn-primary' : 'btn-outline-secondary' }} mx-2">
        Waiting
    </a>
    <a href="{{ route('admin.applicant', 'Rejected') }}"
        class="btn {{ $currentStatus == 'Rejected' ? 'btn-primary' : 'btn-outline-secondary' }}">
        Rejected
    </a>




    <table class="table align-middle">
        <thead>
            <tr>
                <th>Applicant Name</th>
                <th>Job Title</th>
                <th>Application Date</th>
                <th>Status</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($applications as $app)
            <tr>
                <td>
                    <img src="{{ asset('img/applicants/default.jpg') }}" alt="{{ $app->name }}" class="rounded-circle me-2" style="width:40px;">
                    {{ $app->name }}
                </td>
                <td>{{ $app->job->title ?? '-' }}</td>
                <td>{{ \Carbon\Carbon::parse($app->application_date)->format('d/M/Y') }}</td>
                <td>
                    <select class="form-select" data-id="{{ $app->id }}">
                        <option value="In Review" {{ $app->status === 'In Review' ? 'selected' : '' }}>In Review</option>
                        <option value="Approved" {{ $app->status === 'Approved' ? 'selected' : '' }}>Approved</option>
                        <option value="Rejected" {{ $app->status === 'Rejected' ? 'selected' : '' }}>Rejected</option>
                    </select>

                </td>
                <td><a href="{{ route('admin.applicant') }}/{{ $app->id }}" class="text-decoration-underline text-primary">View Details</a></td>
            </tr>
            @endforeach
        </tbody>

    </table>

    <div class="text-center mt-4">
        <a href="#" class="text-decoration-none text-primary">See More</a>
    </div>
</div>
@endsection