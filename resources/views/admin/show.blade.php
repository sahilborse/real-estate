@extends('layouts.app')

@section('title', $property->name)

@section('content')
<div class="container my-5">
    <div class="card shadow-sm">
        <div class="card-body">
            <h2 class="card-title mb-4">{{ $property->name }}</h2>

            <div class="row mb-3">
                <div class="col-md-6">
                    <p><strong>Type:</strong> {{ $property->type }}</p>
                    <p><strong>Price:</strong> ₹{{ number_format($property->price, 2) }}</p>
                    <p><strong>Area:</strong> {{ $property->area_sqft }} sqft</p>
                    <p><strong>Address:</strong> {{ $property->address }}</p>
                    <p><strong>Description:</strong> {{ $property->description ?? 'N/A' }}</p>
                </div>
                <div class="col-md-6 text-center">
                    @if($property->image_path)
                        <img src="{{ asset('storage/' . $property->image_path) }}" class="img-fluid rounded shadow-sm" style="max-height: 300px;" alt="Property Image">
                    @else
                        <p class="text-muted">No image available</p>
                    @endif
                </div>
            </div>

            <a href="{{ route('admin.properties.index') }}" class="btn btn-outline-secondary mt-3">
                ← Back to All Properties
            </a>
        </div>
    </div>
</div>
@endsection
