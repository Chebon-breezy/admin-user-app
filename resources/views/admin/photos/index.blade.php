@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Photos</h1>
    <a href="{{ route('photos.create') }}" class="btn btn-primary">Add Photo</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Age</th>
                <th>Location</th>
                <th>Profession</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($photos as $photo)
            <tr>
                <td>{{ $photo->title }}</td>
                <td>{{ $photo->description }}</td>
                <td><img src="{{ asset('storage/' . $photo->image_path) }}" alt="{{ $photo->title }}" width="100"></td>
                <td>{{ $photo->age }}</td>
                <td>{{ $photo->location }}</td>
                <td>{{ $photo->profession }}</td>
                <td>
                    <form action="{{ route('photos.destroy', $photo) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection