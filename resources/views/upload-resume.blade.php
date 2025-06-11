@extends('layout.main')

@section('container')
<main>
    <section class="py-5">
        <div class="container p-5" style="max-width: 700px" ;>
            <a href="#" class="text-decoration-none text-muted mb-3 d-inline-flex align-items-center">
                <i class="bi bi-arrow-left me-1"></i> Back
            </a>

            <p class="text-success small fw-medium d-flex align-items-center mb-1">
                <img src="{{ asset('img/logo.jpg') }}" alt="Meta logo" class="me-1" style="width: 16px; height: 16px;">
                Meta Company
            </p>

            <h2 class="fw-bold mb-0">Product designer</h2>
            <p class="text-muted mb-4">Porto, Portugal</p>

            <h5 class="fw-semibold mb-3">Personal Information</h5>

            <form>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="firstName" class="form-label">Name*</label>
                        <input type="text" class="form-control" id="firstName" placeholder="Philip" required>
                    </div>
                    <div class="col-md-6">
                        <label for="lastName" class="form-label">Last Name*</label>
                        <input type="text" class="form-control" id="lastName" placeholder="Maya" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email*</label>
                        <input type="email" class="form-control" id="email" placeholder="Philip.Maya@gmail.com" required>
                    </div>
                    <div class="col-md-6">
                        <label for="phone" class="form-label">Phone Number*</label>
                        <div class="input-group">
                            <select class="form-select" style="max-width: 80px;">
                                <option selected>🇵🇹</option>
                                <!-- Opsi tambahan -->
                            </select>
                            <input type="tel" class="form-control" id="phone" placeholder="345 016 2468" required>
                        </div>
                    </div>

                    <div class="col-12">
                        <label class="form-label">Upload CV*</label>
                        <div class="d-flex align-items-center border rounded bg-light px-3 py-2">
                            <i class="bi bi-paperclip me-2"></i>
                            Resume.pdf
                        </div>
                    </div>

                    <div class="col-12">
                        <label class="form-label">Additional File*</label>
                        <div class="d-flex align-items-center border rounded bg-light px-3 py-2">
                            <i class="bi bi-paperclip me-2"></i>
                            Portfolio.pdf
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="coverLetter" class="form-label">Cover Letter</label>
                        <textarea class="form-control" id="coverLetter" rows="5" placeholder="Write a letter..."></textarea>
                    </div>

                    <div class="col-12">
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="agreePolicy" required>
                            <label class="form-check-label small" for="agreePolicy">
                                By submitting this application, I agree that I have read the Privacy Policy...
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="allowContact">
                            <label class="form-check-label small" for="allowContact">
                                Yes, Jobior can contact me directly about specific future job opportunities.
                            </label>
                        </div>
                    </div>

                    <div class="col-12 mt-4">
                        <button type="submit" class="btn btn-dark px-4 py-2 rounded-pill fw-medium">
                            Submit application
                        </button>
                    </div>
                </div>
            </form>
        </div>

</main>
@endsection