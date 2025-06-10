@extends('layout.main')

@section('container')
<main class="container my-5">
    <div class="card shadow-sm p-5">
        <!-- Profile Header -->
        <div class="d-flex align-items-center mb-5">
            <img src="{{ asset('img/logo.jpg') }}" class="rounded-circle me-3" width="70" height="70" alt="Profile Photo">
            <div class="flex-grow-1">
                <h4 class="fw-bold mb-0">Siti Nurcica</h4>
                <p class="text-muted mb-0">UI/UX Designer</p>
                <p class="text-muted">Bekasi, Konoha</p>
            </div>
        </div>

        <!-- Tabs -->
        <ul class="nav nav-tabs mb-4" id="profileTab" role="tablist">
            <li class="nav-item">
                <button class="nav-link active" id="about-tab" data-bs-toggle="tab" data-bs-target="#about" type="button" role="tab">About</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" id="resume-tab" data-bs-toggle="tab" data-bs-target="#resume" type="button" role="tab">Resume</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" id="activities-tab" data-bs-toggle="tab" data-bs-target="#activities" type="button" role="tab">My Activities</button>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content">
            <!-- About Section -->
            <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="about-tab">
                <h5 class="fw-semibold mb-2">About</h5>
                <p class="text-muted">Updating your information will offer you the most relevant content</p>
                <div class="row text-sm mb-4">
                    <div class="col-md-3 mb-3">
                        <strong class="d-block text-muted">Employment Status</strong>
                        <span>Not Employed</span>
                    </div>
                    <div class="col-md-3 mb-3">
                        <strong class="d-block text-muted">Full Name</strong>
                        <span>Siti Nurcica</span>
                    </div>
                    <div class="col-md-3 mb-3">
                        <strong class="d-block text-muted">Job Title</strong>
                        <span>UI/UX Designer</span>
                    </div>
                    <div class="col-md-3 mb-3">
                        <strong class="d-block text-muted">Location</strong>
                        <span>Bekasi, (Indonesia)</span>
                    </div>
                </div>
                <a href="#" class="text-decoration-none text-primary fw-semibold mb-5 d-block">Show All Info →</a>

                <hr class="my-4">

                <!-- Resume Inside About -->
                <h5 class="fw-semibold mb-3">Resume</h5>
                <div class="border rounded py-4 px-3 mb-2 d-flex justify-content-between align-items-center">
                    <div>
                        <i class="bi bi-file-earmark-text-fill me-2"></i>
                        <span>philip Resume.Pdf</span>
                        <small class="text-muted d-block">Date Added</small>
                    </div>
                    <i class="bi bi-three-dots-vertical"></i>
                </div>
                <a href="#" class="text-decoration-none d-inline-block mt-2 text-success"><i class="bi bi-plus-circle me-1"></i> Add more</a>

                <hr class="my-4">

                <!-- Activities Inside About -->
                <h5 class="fw-semibold mb-3">My Activities</h5>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="border rounded p-4">
                            <div class="d-flex align-items-center mb-1">
                                <img src="{{ asset('img/logo.jpg') }}" alt="Meta Logo" width="20" height="20" class="me-2">
                                <small class="text-muted">Meta company</small>
                            </div>

                            <h6 class="fw-semibold">Product Designer</h6>
                            <small class="text-muted">Bekasi, Indonesia (On Site)</small>
                            <div class="mt-2">
                                <span class="badge bg-light text-success border border-success">Archived 5 Days Ago</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="border rounded p-4">
                            <div class="d-flex align-items-center mb-1">
                                <img src="{{ asset('img/logo.jpg') }}" alt="Meta Logo" width="20" height="20" class="me-2">
                                <small class="text-muted">Meta company</small>
                            </div>
                            <h6 class="fw-semibold">Product Designer</h6>
                            <small class="text-muted">Bekasi, Indonesia (On Site)</small>
                            <div class="mt-2">
                                <span class="badge bg-light text-success border border-success">Archived 5 Days Ago</span>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="text-decoration-none text-primary fw-semibold">Show All Info →</a>
            </div>

            <!-- Resume Tab -->
            <div class="tab-pane fade" id="resume" role="tabpanel" aria-labelledby="resume-tab">
                <h5 class="fw-semibold mb-3">Resume</h5>
                <div class="border rounded p-4 mb-3 d-flex justify-content-between align-items-center">
                    <div>
                        <i class="bi bi-file-earmark-text me-2"></i> philip Resume.Pdf<br>
                        <small class="text-muted">Date Added</small>
                    </div>
                    <i class="bi bi-three-dots"></i>
                </div>
                <a href="#" class="text-success"><i class="bi bi-plus-circle me-1"></i> Add more</a>
            </div>

            <!-- Activities Tab -->
            <div class="tab-pane fade" id="activities" role="tabpanel" aria-labelledby="activities-tab">
                <h5 class="fw-semibold mb-3">My Activities</h5>
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="border p-4 rounded">
                            <div class="d-flex align-items-center mb-1">
                                <img src="{{ asset('img/logo.jpg') }}" alt="Meta Logo" width="20" height="20" class="me-2">
                                <small class="text-muted">Meta company</small>
                            </div>
                            <div class="fw-semibold">Product Designer</div>
                            <small class="text-muted">Bekasi, Indonesia (On Site)</small>
                            <div class="badge bg-success mt-2">Archived 5 Days Ago</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="border p-4 rounded">
                            <div class="d-flex align-items-center mb-1">
                                <img src="{{ asset('img/logo.jpg') }}" alt="Meta Logo" width="20" height="20" class="me-2">
                                <small class="text-muted">Meta company</small>
                            </div>
                            <div class="fw-semibold">Product Designer</div>
                            <small class="text-muted">Bekasi, Indonesia (On Site)</small>
                            <div class="badge bg-success mt-2">Archived 5 Days Ago</div>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <a href="#" class="text-primary fw-semibold">Show All Info</a>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection