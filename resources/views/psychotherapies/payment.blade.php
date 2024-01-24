<!-- resources/views/psychotherapies/payment.blade.php -->

@extends('layouts.app') {{-- Assuming you have a main layout file --}}

@section('content')

<div class="container">
    <h2>Payment Page</h2>

    <p>Your psychotherapy registration is almost complete. Please proceed with the payment to confirm your subscription.</p>

    <!-- Add payment form or instructions as needed -->

    <form method="POST" action="{{ route('psychotherapies.payment') }}">
        @csrf

        <!-- Add payment form fields or instructions as needed -->

        <button type="submit" class="btn btn-success">Complete Payment</button>
    </form>
</div>

@endsection
