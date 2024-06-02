@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Available Photos</h1>

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif

    <div class="row">
        @foreach($photos as $photo)
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{ asset('storage/' . $photo->image_path) }}" class="card-img-top" alt="{{ $photo->full_name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $photo->full_name }}</h5>
                    <p class="card-text"><strong>Age:</strong> {{ $photo->age }}</p>
                    <p class="card-text"><strong>Job Type:</strong> {{ $photo->job_type }}</p>
                    <p class="card-text"><strong>Availability:</strong> {{ $photo->availability }}</p>
                    <p class="card-text"><strong>Expected Salary:</strong> ${{ $photo->expected_salary }}</p>
                    <form action="{{ route('photos.hire', $photo) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-success">Hire</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection