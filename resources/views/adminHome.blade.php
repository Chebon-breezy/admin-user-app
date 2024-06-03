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

                    <!-- Links to admin photos and hires -->
                    <ul>
                        <li><a href="{{ route('photos.index') }}">View Photos</a></li>
                        <li><a href="{{ route('photos.create') }}">Upload Photo</a></li>
                        <li><a href="{{ route('photos.payments') }}">View Payments</a></li> <!-- Added this line -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection