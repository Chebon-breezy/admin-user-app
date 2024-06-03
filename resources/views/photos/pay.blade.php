@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Complete Payment</h1>

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

    <form action="{{ route('payment.process') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="phone_number">Phone Number</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number" required>
        </div>
        <div class="form-group">
            <label for="client_details">Client Details</label>
            <input type="text" class="form-control" id="client_details" name="client_details" required>
        </div>
        <div class="form-group">
            <label for="payment_method">Payment Method</label>
            <input type="text" class="form-control" id="payment_method" name="payment_method" required>
        </div>
        <div class="form-group">
            <label for="amount">Amount</label>
            <input type="number" step="0.01" class="form-control" id="amount" name="amount" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" class="form-control" id="status" name="status" value="pending" readonly>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection