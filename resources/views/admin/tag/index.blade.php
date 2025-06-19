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

        <div class="row">
            @foreach ($tags as $tag)
                <div class="col-md-6 mb-3">
                    <div class="card p-3 d-flex">
                        <h5>{{ $tag->name }}</h5>
                        <div class="dropdown"><i class="bi bi-three-dots-vertical" data-bs-toggle="dropdown"></i>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('admin.tag.edit', $tag->id) }}">Edit</a></li>
                                <li>
                                    <form action="{{ route('admin.tag.destroy', $tag->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type='submit' class="dropdown-item"
                                            onclick="return confirm('Are You Sure?')">Delete</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @endsection
