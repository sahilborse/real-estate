@extends('layouts.app')

@section('content')
<div class="container d-flex flex-column align-items-center justify-content-center min-vh-100">
    <div class="w-100" style="max-width: 600px;">

        <div class="alert alert-success text-center shadow">
            <h4 class="alert-heading">✅ Booking Successful!</h4>
            <p class="mb-0">Your property viewing has been booked successfully.</p>
        </div>

        <div class="card border-0 shadow-sm rounded-4">
            <div class="card-body p-4">
                <h5 class="card-title mb-3">📌 Property: <strong>{{ $property_name ?? 'N/A' }}</strong></h5>
                <p class="card-text mb-2"><strong>Cost:</strong> ₹{{ number_format($property_cost, 2) ?? 'N/A' }}</p>
                <hr>
                <p class="card-text mb-2"><strong>Your Name:</strong> {{ $booking->name }}</p>
                <p class="card-text mb-2"><strong>Email:</strong> {{ $booking->email }}</p>
                <p class="card-text mb-2"><strong>Phone:</strong> {{ $booking->phone }}</p>
                <p class="card-text"><strong>Preferred Date & Time:</strong> {{ \Carbon\Carbon::parse($booking->preferred_datetime)->format('d M Y, h:i A') }}</p>
            </div>
        </div>

        <div class="text-center mt-4">
            <a href="{{ route('user.properties.index') }}" class="btn btn-primary px-4 py-2">
                ← Back to Properties
            </a>
        </div>
        
    </div>
</div>
@endsection
