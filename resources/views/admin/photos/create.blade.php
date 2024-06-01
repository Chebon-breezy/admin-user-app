@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Photo</h1>
    <form action="{{ route('photos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="full_name">Full Name</label>
            <input type="text" class="form-control" id="full_name" name="full_name" required>
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" class="form-control" id="age" name="age" required>
        </div>
        <div class="form-group">
            <label for="job_type">Type of Job Wanted</label>
            <input type="text" class="form-control" id="job_type" name="job_type" required>
        </div>
        <div class="form-group">
            <label for="availability">Availability</label>
            <input type="text" class="form-control" id="availability" name="availability" required>
        </div>
        <div class="form-group">
            <label for="expected_salary">Expected Salary</label>
            <input type="number" class="form-control" id="expected_salary" name="expected_salary" required>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control" id="image" name="image" required>
        </div>
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
</div>
@endsection