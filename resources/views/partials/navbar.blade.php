<nav>
    <section class="container d-flex justify-content-between align-items-center py-3">
        <h4><a href="{{ route('home') }}" class="text-decoration-none font-righteous">Jayafuture</a></h4>
        <div class="d-flex align-items-center">
            <div class="px-3 border-end"><i class="bi bi-question-circle"></i></div>
            <div class="px-3 border-end">Employers</div>
            <a href="{{ route('signup') }}"><div class=" btn btn-dark rounded-sm px-3"><i class="bi bi-box-arrow-in-right"></i> Sign Up</div></a>
        </div>
    </section>
    <section class="nav d-flex justify-content-center py-3 border">
        <div class="px-4">Jobs</div>
        <div class="px-4">Scholarship</div>
        <div class="px-4">Create CV</div>
    </section>
</nav>