@extends('layout.dashboard')

@section('container')
<div class="container py-5">

    <!-- Title -->
    <h2 class="fw-bold mb-4 text-start">Posts</h2>

    <!-- Search and Filter -->
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
        <div class="input-group" style="max-width: 400px;">
            <span class="input-group-text bg-white border-end-0">
                <i class="bi bi-search"></i>
            </span>
            <input type="text" class="form-control border-start-0" placeholder="Search and Filter">
            <span class="input-group-text bg-white">
                <i class="bi bi-sliders2"></i>
            </span>
        </div>

        <div class="d-flex gap-2">
            <button class="btn btn-outline-secondary rounded-pill px-3">Marked</button>
            <button class="btn btn-outline-secondary rounded-pill px-3">Open And Paused</button>
        </div>
        
        <a href="#" class="text-dark btn btn-outline-secondary rounded-pill px-3"> + Add Internship</a>

        <div>
            <select class="form-select rounded-pill">
                <option>Applicants</option>
            </select>
        </div>
    </div>

    <!-- Table -->
    <div class="table-responsive">
        <table class="table align-middle text-start">
            <thead class="table-light">
                <tr>
                    <th>Job Title <i class="bi bi-arrow-down-up"></i></th>
                    <th>Type</th>
                    <th>Location</th>
                    <th>Applicants</th>
                    <th>Views</th>
                    <th>Date Posted <i class="bi bi-arrow-down-up"></i></th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><i class="bi bi-star-fill text-primary me-1"></i> UX/UI Designer</td>
                    <td>Remote</td>
                    <td>Karlsruhe, Germany</td>
                    <td>17 <button class="btn btn-outline-dark btn-sm rounded-pill ms-2">View</button></td>
                    <td>901</td>
                    <td>06/Jul/2024</td>
                    <td><span class="badge bg-secondary">Closed</span></td>
                    <td><i class="bi bi-three-dots-vertical"></i></td>
                </tr>
                <tr>
                    <td><i class="bi bi-star-fill text-primary me-1"></i> Product Designer</td>
                    <td>On Site</td>
                    <td>Delft, Netherlands</td>
                    <td>10 <button class="btn btn-outline-dark btn-sm rounded-pill ms-2">View</button></td>
                    <td>203</td>
                    <td>09/Jul/2024</td>
                    <td><span class="badge bg-success">Open</span></td>
                    <td><i class="bi bi-three-dots-vertical"></i></td>
                </tr>
                <tr>
                    <td><i class="bi bi-star-fill text-primary me-1"></i> UX/UI Designer</td>
                    <td>Hybrid</td>
                    <td>Berlin, Germany</td>
                    <td>15 <button class="btn btn-outline-dark btn-sm rounded-pill ms-2">View</button></td>
                    <td>901</td>
                    <td>06/Jul/2024</td>
                    <td><span class="badge bg-warning text-dark">Paused</span></td>
                    <td><i class="bi bi-three-dots-vertical"></i></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- See Less -->
    <div class="text-center mt-4">
        <a href="#" class="text-primary text-decoration-underline">See Less <i class="bi bi-chevron-up"></i></a>
    </div>
</div>
@endsection