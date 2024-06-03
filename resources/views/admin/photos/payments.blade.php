<!-- resources/views/admin/payments/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Payments</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Phone Number</th>
                <th>Client Details</th>
                <th>Payment Method</th>
                <th>Amount</th>
                <th>Payment Date</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($payments as $payment)
            <tr>
                <td>{{ $payment->id }}</td>
                <td>{{ $payment->phone_number }}</td>
                <td>{{ $payment->client_details }}</td>
                <td>{{ $payment->payment_method }}</td>
                <td>{{ $payment->amount }}</td>
                <td>{{ $payment->payment_date }}</td>
                <td>{{ $payment->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection