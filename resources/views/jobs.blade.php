@extends('layout.main')

@section('container')
<main>
    <hr class="my-5">
    <div class="container-fluid">
        <div class="row mx-5">
            <!-- Kiri: List Jobs -->
            <div class="col-md-4" style="max-height: 120vh; overflow-y: auto;">
                <!-- Ulangi card ini untuk setiap job -->
                @for ($i = 0; $i < 5; $i++)
                    <div class="card mb-3 shadow-sm">
                    <div class="card-body">
                        <h6 class="mb-1 fw-semibold">UI/UX Designer</h6>
                        <small class="text-muted d-block">NAVA Company</small>
                        <small class="text-muted d-block">Bonn, Germany (On Site)</small>
                        <div class="mt-2 d-flex gap-2">
                            <span class="badge bg-primary">Easy Apply</span>
                            <span class="badge bg-info">Multiple Candidate</span>
                        </div>
                        <div class="text-end text-muted small mt-2">1d ago</div>
                    </div>
            </div>
            @endfor
        </div>

        <!-- Kanan: Detail Job -->
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <!-- Header -->
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('img/logo.jpg') }}" alt="Logo" width="60" class="me-3 rounded-circle">
                            <div>
                                <h5 class="fw-bold mb-1">UI/UX Designer</h5>
                                <p class="text-muted mb-0">NAVA Company</p>
                                <small class="text-muted">Bonn, Germany • On Site</small>
                            </div>
                        </div>
                        <button class="btn btn-outline-dark">Apply Now</button>
                    </div>

                    <!-- Tabs -->
                    <ul class="nav nav-tabs mt-4" id="jobTab" role="tablist">
                        <li class="nav-item">
                            <button class="nav-link active" id="desc-tab" data-bs-toggle="tab" data-bs-target="#desc">Description</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" id="req-tab" data-bs-toggle="tab" data-bs-target="#req">Requirements</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" id="benefit-tab" data-bs-toggle="tab" data-bs-target="#benefit">Benefits</button>
                        </li>
                    </ul>

                    <div class="tab-content mt-3 p-2">
                        <!-- Description -->
                        <div class="tab-pane fade show active" id="desc">
                            <p>
                                We are looking for a UI/UX Designer to turn our software into easy-to-use products for our clients.
                                UI/UX Designer responsibilities include gathering user requirements, designing graphic elements, and building navigation components.
                            </p>
                        </div>

                        <!-- Requirements -->
                        <div class="tab-pane fade" id="req">
                            <ul>
                                <li>Proven work experience as a UI/UX Designer or similar role</li>
                                <li>Portfolio of design projects</li>
                                <li>Knowledge of wireframe tools</li>
                                <li>Team spirit and strong communication skills</li>
                            </ul>
                        </div>

                        <!-- Benefits -->
                        <div class="tab-pane fade" id="benefit">
                            <ul>
                                <li>Flexible working hours</li>
                                <li>Health insurance</li>
                                <li>Annual performance bonus</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
</main>
@endsection