@extends('layout.main')

@section('container')
<main>

    {{-- search bar --}}
    <section class="container">
        <h3 class="text-center my-5">Start Your Jaya Future Carrier</h3>
        <div class="search">
            <form action="" method="get" id="search-form">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Junior / Intern Position">
                    <button class="btn btn-outline-secondary" type="submit" id="button">Cari</button>
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
        <h3 class="text-center my-5">Exclusive Offers</h3>
        <div class="job container d-flex flex-wrap justify-content-center gap-3 mb-5">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <img src="{{ asset('img/halal.jpg') }}" alt="logo" class="rounded-circle mb-3" style="width: 50px; height: 50px;">
                    <h5 class="card-title">Product Design</h5>
                    <p class="card-text">Porto, Portugal <strong>(On site)</strong></p>
                    <div class="d-flex">
                        <a href="#" class="text-decoration-none border rounded-pill p-1 me-1">Easy Apply</a>
                        <a href="#" class="text-decoration-none border rounded-pill p-1 me-1">Multiple Candidate</a>
                    </div>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <img src="{{ asset('img/halal.jpg') }}" alt="logo" class="rounded-circle mb-3" style="width: 50px; height: 50px;">
                    <h5 class="card-title">Product Design</h5>
                    <p class="card-text">Porto, Portugal <strong>(On site)</strong></p>
                    <div class="d-flex">
                        <a href="#" class="text-decoration-none border rounded-pill p-1 me-1">Easy Apply</a>
                        <a href="#" class="text-decoration-none border rounded-pill p-1 me-1">Multiple Candidate</a>
                    </div>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <img src="{{ asset('img/halal.jpg') }}" alt="logo" class="rounded-circle mb-3" style="width: 50px; height: 50px;">
                    <h5 class="card-title">Product Design</h5>
                    <p class="card-text">Porto, Portugal <strong>(On site)</strong></p>
                    <div class="d-flex">
                        <a href="#" class="text-decoration-none border rounded-pill p-1 me-1">Easy Apply</a>
                        <a href="#" class="text-decoration-none border rounded-pill p-1 me-1">Multiple Candidate</a>
                    </div>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <img src="{{ asset('img/halal.jpg') }}" alt="logo" class="rounded-circle mb-3" style="width: 50px; height: 50px;">
                    <h5 class="card-title">Product Design</h5>
                    <p class="card-text">Porto, Portugal <strong>(On site)</strong></p>
                    <div class="d-flex">
                        <a href="#" class="text-decoration-none border rounded-pill p-1 me-1">Easy Apply</a>
                        <a href="#" class="text-decoration-none border rounded-pill p-1 me-1">Multiple Candidate</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hero my-5 p-5">
        <h3 class="text-center my-5 text-light">Have You Graduated Or Changed Your Career?</h3>
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
        <h3 class="text-center">Top Companies</h3>
        <div>
            <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
        </div>
    </section>

</main>
@endsection