@extends('layout.main')

@section('container')
<div class="container py-5" style="max-width: 1000px;">
    <h2 class="fw-bold mb-4">Applicants</h2>

    <div class="d-flex mb-4">
        <input type="text" class="form-control me-2" placeholder="Search and Filter" style="max-width: 300px;">
        <button class="btn btn-outline-secondary">
            <i class="bi bi-sliders"></i> <!-- Bootstrap icon for filter -->
        </button>
    </div>

    <div class="mb-3">
        <button class="btn btn-outline-secondary">Approved</button>
        <button class="btn btn-primary mx-2">Waiting</button>
        <button class="btn btn-outline-secondary">Rejected</button>
    </div>

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
            <tr>
                <td><img src="{{ asset('img/applicants/jane.jpg') }}" alt="Jane" class="rounded-circle me-2" style="width:40px;"> Jane Smith</td>
                <td>Product Designer</td>
                <td>06/Dec/2024</td>
                <td>
                    <select class="form-select">
                        <option>In Review</option>
                        <option>Approved</option>
                        <option>Rejected</option>
                    </select>
                </td>
                <td><a href="#" class="text-decoration-underline text-primary">View Details</a></td>
            </tr>
            <tr>
                <td><img src="{{ asset('img/applicants/smith.jpg') }}" alt="Smith" class="rounded-circle me-2" style="width:40px;"> Smith Joe</td>
                <td>UX Researcher</td>
                <td>07/Jun/2024</td>
                <td>
                    <select class="form-select">
                        <option>In Review</option>
                        <option>Approved</option>
                        <option>Rejected</option>
                    </select>
                </td>
                <td><a href="#" class="text-decoration-underline text-primary">View Details</a></td>
            </tr>
            <!-- Tambahkan baris lainnya sesuai kebutuhan -->
        </tbody>
    </table>

    <div class="text-center mt-4">
        <a href="#" class="text-decoration-none text-primary">See More</a>
    </div>
</div>
@endsection