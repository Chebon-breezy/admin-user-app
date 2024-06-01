@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Photos</h1>
    <a href="{{ route('photos.create') }}" class="btn btn-primary">Add Photo</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Age</th>
                <th>Type of Job Wanted</th>
                <th>Availability</th>
                <th>Expected Salary</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($photos as $photo)
            <tr>
                <td>{{ $photo->full_name }}</td>
                <td>{{ $photo->age }}</td>
                <td>{{ $photo->job_type }}</td>
                <td>{{ $photo->availability }}</td>
                <td>{{ $photo->expected_salary }}</td>
                <td><img src="{{ asset('storage/' . $photo->image_path) }}" alt="{{ $photo->full_name }}" width="100"></td>
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