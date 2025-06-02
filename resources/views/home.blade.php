@extends('layout.main')

@section('container')
    <main>

        {{-- search bar --}}
        <section class="container">
            <h3 class="text-center my-5 font-righteous">Start Your Jaya Future Carrier</h3>
            <div class="search">
                <form action="" method="get" id="search-form">
                    <div class="search-box">
                        <div class="input-box">
                            <input type="text" placeholder="Junior / Intern Position">
                        </div>
                        <div class="divider"></div>
                        <div class="search-icon">
                            <i class="bi bi-search"></i>
                        </div>
                    </div>
                </form>
            </div>
            <p class="text-center">Employers?<a href="#">Post your job here</a></p>
            <div class="job-category d-flex flex-wrap justify-content-center gap-3 my-5">
                <div class="p-2 border rounded">Easy Apply</div>
                <div class="p-2 border rounded">Part Time</div>
                <div class="p-2 border rounded">Customer Service</div>
                <div class="p-2 border rounded">Data Analyst</div>
            </div>
        </section>

        {{-- job Offers --}}
        <section class="border-top my-5">
            <h3 class="text-center my-5 font-righteous">Exclusive Offers</h3>
            <div class="job container d-flex flex-wrap justify-content-center gap-3 mb-5">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <img src="{{ asset('img/halal.jpg') }}" alt="logo" class="rounded-circle mb-3"
                            style="width: 50px; height: 50px;">
                        <h5 class="card-title">Product Design</h5>
                        <p class="card-text">Porto, Portugal <strong>(On site)</strong></p>
                        <div class="d-flex">
                            <a href="#" class="text-decoration-none border rounded-pill p-1 me-1">Easy Apply</a>
                            <a href="#" class="text-decoration-none border rounded-pill p-1 me-1">Multiple
                                Candidate</a>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <img src="{{ asset('img/halal.jpg') }}" alt="logo" class="rounded-circle mb-3"
                            style="width: 50px; height: 50px;">
                        <h5 class="card-title">Product Design</h5>
                        <p class="card-text">Porto, Portugal <strong>(On site)</strong></p>
                        <div class="d-flex">
                            <a href="#" class="text-decoration-none border rounded-pill p-1 me-1">Easy Apply</a>
                            <a href="#" class="text-decoration-none border rounded-pill p-1 me-1">Multiple
                                Candidate</a>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <img src="{{ asset('img/halal.jpg') }}" alt="logo" class="rounded-circle mb-3"
                            style="width: 50px; height: 50px;">
                        <h5 class="card-title">Product Design</h5>
                        <p class="card-text">Porto, Portugal <strong>(On site)</strong></p>
                        <div class="d-flex">
                            <a href="#" class="text-decoration-none border rounded-pill p-1 me-1">Easy Apply</a>
                            <a href="#" class="text-decoration-none border rounded-pill p-1 me-1">Multiple
                                Candidate</a>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 20rem;">
                    <div class="card-body">
                        <img src="{{ asset('img/halal.jpg') }}" alt="logo" class="rounded-circle mb-3"
                            style="width: 50px; height: 50px;">
                        <h5 class="card-title">Product Design</h5>
                        <p class="card-text">Porto, Portugal <strong>(On site)</strong></p>
                        <div class="d-flex">
                            <a href="#" class="text-decoration-none border rounded-pill p-2 me-1">Easy Apply</a>
                            <a href="#" class="text-decoration-none border rounded-pill p-2 me-1">Multiple
                                Candidate</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="hero my-5 p-5">
            <h3 class="text-center my-5 text-light font-righteous">Have You Graduated Or Changed Your Career?</h3>
            <div class="container d-flex justify-content-center gap-5 text-center">
                <div>
                    <i class="bi bi-people border border-white rounded-circle p-3 px-4"></i>
                    <p class="mt-4">Enter jobior compion</p>
                </div>
                <div>
                    <i class="bi bi-journal-text border border-white rounded-circle p-3 px-4"></i>
                    <p class="mt-4">Get resume assessment</p>
                </div>
                <div>
                    <i class="bi bi-person-check border border-white rounded-circle p-3 px-4"></i>
                    <p class="mt-4">Search suitable recruiter</p>
                </div>
                <div>
                    <i class="bi bi-currency-dollar border border-white rounded-circle p-3 px-4"></i>
                    <p class="mt-4">Search salaries by major</p>
                </div>
            </div>
        </section>
        <section>
            <h3 class="text-center font-righteous">Top Companies</h3>
            <div class="container d-flex flex-wrap justify-content-center gap-3 my-5">
                <div class="card p-4" style="width: 18rem;">
                    <img src="{{ asset('img/halal.jpg') }}" class="mx-auto border rounded-circle" alt="company"
                        style="width: 5rem; height: 5rem";>
                    <div class="card-body">
                        <h5 class="card-title fw-bold mb-4">Halal Brother</h5>
                        <p class="card-text">10.000 to 100,000 employs</p>
                        <p class="card-text mb-3">6.988.877 Followers</p>
                        <p class="card-text" style="color: #797878">74% Recommendation rate in last 2 years </p>
                    </div>
                    <div class="mt-2">
                        <a href="#" class="card-link border rounded-pill py-2 px-3">Hiring</a>
                        <a href="#" class="card-link border rounded-pill py-2 px-3">High Benefits</a>
                    </div>
                </div>
                <div class="card p-4" style="width: 18rem;">
                    <img src="{{ asset('img/halal.jpg') }}" class="mx-auto border rounded-circle" alt="company"
                        style="width: 5rem; height: 5rem";>
                    <div class="card-body">
                        <h5 class="card-title fw-bold mb-4">Halal Brother</h5>
                        <p class="card-text">10.000 to 100,000 employs</p>
                        <p class="card-text mb-3">6.988.877 Followers</p>
                        <p class="card-text" style="color: #797878">74% Recommendation rate in last 2 years </p>
                    </div>
                    <div class="mt-2">
                        <a href="#" class="card-link border rounded-pill py-2 px-3">Hiring</a>
                        <a href="#" class="card-link border rounded-pill py-2 px-3">High Benefits</a>
                    </div>
                </div>
                <div class="card p-4" style="width: 18rem;">
                    <img src="{{ asset('img/halal.jpg') }}" class="mx-auto border rounded-circle" alt="company"
                        style="width: 5rem; height: 5rem";>
                    <div class="card-body">
                        <h5 class="card-title fw-bold mb-4">Halal Brother</h5>
                        <p class="card-text">10.000 to 100,000 employs</p>
                        <p class="card-text mb-3">6.988.877 Followers</p>
                        <p class="card-text" style="color: #797878">74% Recommendation rate in last 2 years </p>
                    </div>
                    <div class="mt-2">
                        <a href="#" class="card-link border rounded-pill py-2 px-3">Hiring</a>
                        <a href="#" class="card-link border rounded-pill py-2 px-3">High Benefits</a>
                    </div>
                </div>
                <div class="card p-4" style="width: 18rem;">
                    <img src="{{ asset('img/halal.jpg') }}" class="mx-auto border rounded-circle" alt="company"
                        style="width: 5rem; height: 5rem";>
                    <div class="card-body">
                        <h5 class="card-title fw-bold mb-4">Halal Brother</h5>
                        <p class="card-text">10.000 to 100,000 employs</p>
                        <p class="card-text mb-3">6.988.877 Followers</p>
                        <p class="card-text" style="color: #797878">74% Recommendation rate in last 2 years </p>
                    </div>
                    <div class="mt-2">
                        <a href="#" class="card-link border rounded-pill py-2 px-3">Hiring</a>
                        <a href="#" class="card-link border rounded-pill py-2 px-3">High Benefits</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="get-app">
            <div class="container">
                <h3 class="text-white">Get The App</h3>
                <p>Experience the power of Jobior anywhere with our quick apply feature.</p>
                <div class="app d-flex gap-3 my-5">
                    <div class="d-flex gap-3 border border-white border-2 rounded-pill py-2 px-4">
                        <i class="bi bi-apple"></i>
                        <div>
                            <p>Download On</p>
                            <h5>App Store</h5>
                        </div>
                    </div>
                    <div class="d-flex gap-3 border border-white border-2 rounded-pill py-2 px-4">
                        <i class="bi bi-google-play"></i>
                        <div>
                            <p>Get It On</p>
                            <h5>Google Play</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    @include('components.footer')
@endsection
