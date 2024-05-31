@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Available Photos</h1>
    <div class="row">
        @foreach($photos as $photo)
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{ asset('storage/' . $photo->image_path) }}" class="card-img-top" alt="{{ $photo->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $photo->title }}</h5>
                    <p class="card-text">{{ $photo->description }}</p>
                    <p class="card-text"><strong>Age:</strong> {{ $photo->age }}</p>
                    <p class="card-text"><strong>Location:</strong> {{ $photo->location }}</p>
                    <p class="card-text"><strong>Profession:</strong> {{ $photo->profession }}</p>
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