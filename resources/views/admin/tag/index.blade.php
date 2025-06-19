@extends('layout.dashboard')

@section('container')
    <div class="container py-5">

        <!-- Title -->
        <h2 class="fw-bold mb-4 text-start">Tags</h2>

        <!-- Search and Filter -->
        <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
            <div class="input-group" style="max-width: 400px;">
                <span class="input-group-text bg-white border-end-0">
                    <i class="bi bi-search"></i>
                </span>
                <input type="text" class="form-control border-start-0" placeholder="Search and Filter">
            </div>

            <a href="{{ route('admin.tag.create') }}" class="text-dark btn btn-outline-secondary rounded-pill px-3"> + Add
                Tag</a>
        </div>

        <div class="table-responsive">
            <table class="table align-middle text-start">
                <thead class="table-light">
                    <tr>
                        <th>Tag Name</i></th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($tags as $tag)
                        <tr>
                            <td><i class="bi bi-star-fill text-primary me-1"></i> {{ $tag->name }}</td>
                            <td class="dropdown"><i class="bi bi-three-dots-vertical" data-bs-toggle="dropdown"></i>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('admin.tag.edit', $tag->id) }}">Edit</a></li>
                                    <li>
                                        <form action="{{ route('admin.tag.destroy', $tag->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type='submit' class="dropdown-item" onclick="return confirm('Are You Sure?')">Delete</button>
                                        </form>  
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    @empty
                        <p>No Data</p>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
@endsection
