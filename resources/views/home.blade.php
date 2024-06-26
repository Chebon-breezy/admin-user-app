@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <!-- Removed the "You are a User" message -->

                    <!-- Added links to user photos -->
                    <ul>
                        <li><a href="{{ route('photos.show') }}">View Photos</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection