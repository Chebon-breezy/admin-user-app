<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function showPaymentForm(Request $request)
    {
        return view('photos.pay');
    }

    public function processPayment(Request $request)
    {
        // Validate the request
        $request->validate([
            'phone_number' => 'required',
            'client_details' => 'required',
        ]);

        // Process the payment here
        // For example, save payment details in the database

        // Redirect to a success page or back to the form with a success message
        return redirect()->route('photos.index')->with('success', 'Payment completed successfully.');
    }
}
