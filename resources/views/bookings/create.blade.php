@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <form action="{{ route('user.properties.book', ['id' => $property->id]) }}" method="POST" class="card p-5 shadow-lg" style="max-width: 500px; width: 100%;">
        @csrf

        <h3 class="text-center mb-4 text-primary">Book a Property Visit</h3>

        <div class="mb-3">
            <label for="name" class="form-label fw-semibold">Your Name</label>
            <input type="text" name="name" id="name" class="form-control rounded-pill" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label fw-semibold">Your Email</label>
            <input type="email" name="email" id="email" class="form-control rounded-pill" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label fw-semibold">Your Phone</label>
            <input type="text" name="phone" id="phone" class="form-control rounded-pill" required>
        </div>

        <div class="mb-4">
            <label for="preferred_datetime" class="form-label fw-semibold">Preferred Date & Time</label>
            <input type="datetime-local" name="preferred_datetime" id="preferred_datetime" class="form-control rounded-pill" required>
        </div>

        <div class="d-grid">
            <button type="submit" class="btn btn-success rounded-pill fw-bold">Submit Booking</button>
        </div>
    </form>
</div>
@endsection