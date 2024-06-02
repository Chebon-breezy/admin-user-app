<!-- resources/views/hire.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Hired Photos</h1>
    <table class="table">
        <thead>
            <tr>
                <th>User</th>
                <th>Photo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($hires as $hire)
            <tr>
                <td>{{ $hire->user->name }}</td>
                <td>
                    <img src="{{ asset('storage/photos/' . $hire->photo->filename) }}" alt="Photo" style="width: 150px; height: auto;">
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection