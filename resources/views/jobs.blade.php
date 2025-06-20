@extends('layout.main')

@section('container')
<main>
    @if(request('keyword'))
    <p class="mb-3 my-3 mx-3">Showing results for: <strong>{{ request('keyword') }}</strong></p>
    @endif

    @livewire('job-board')
</main>
@include('components.footer')
@endsection