@extends('layout.dashboard')

@section('container')
    <div class="container py-5">

        <!-- Title -->
        <h2 class="fw-bold mb-4 text-start">Internships</h2>

        <!-- Search and Filter -->
        <form action="{{ route('admin.internship.index') }}"></form>
        <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
            <div class="input-group" style="max-width: 400px;">
                <span class="input-group-text bg-white border-end-0">
                    <i class="bi bi-search"></i>
                </span>
                <input type="text" class="form-control border-start-0" placeholder="Search" value="{{ request('search') }}">
                <button class="hidden" type="submit"></button>
            </div>

            <div class="d-flex gap-2">
                <button class="btn btn-outline-secondary rounded-pill px-3">Marked</button>
                <button class="btn btn-outline-secondary rounded-pill px-3">Open And Paused</button>
            </div>

            <a href="{{ route('admin.internship.create') }}" class="text-dark btn btn-outline-secondary rounded-pill px-3">
                + Add Internship</a>

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
                    @forelse ($internships as $intern)
                        <tr>
                            <td><i class="bi bi-star-fill text-primary me-1"></i> {{ $intern->title }}</td>
                            <td>{{ $intern->job_type }}</td>
                            <td>{{ $intern->location }}</td>
                            <td>17 <button class="btn btn-outline-dark btn-sm rounded-pill ms-2">View</button></td>
                            <td>901</td>
                            <td>{{ \Carbon\Carbon::parse($intern->date_posted)->translatedFormat('d F Y') }}</td>
                            @if ($intern->status == 'Open')
                                <td><span class="badge bg-success">{{ $intern->status }}</span></td>
                            @elseif($intern->status == 'Paused')
                                <td><span class="badge bg-warning">{{ $intern->status }}</span></td>
                            @else
                                <td><span class="badge bg-secondary">{{ $intern->status }}</span></td>
                            @endif

                            <td class="dropdown"><i class="bi bi-three-dots-vertical" data-bs-toggle="dropdown"></i>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('admin.internship.edit', $intern->id) }}">Edit</a></li>
                                    <li>
                                        <form action="{{ route('admin.internship.destroy', $intern->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type='submit' class="dropdown-item" onclick="return confirm('Are You Sure?')">Delete</button>
                                        </form>  
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    @empty
                        <p>No Data </p>
                    @endforelse

                </tbody>
            </table>
        </div>
        <div class="mt-4">
            {{ $internships->links() }}
        </div>
    </div>
@endsection
