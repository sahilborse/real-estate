@extends('layouts.app')

@section('title', 'Edit Property')

@section('content')
<div class="container my-5">
    <h2 class="mb-4">Edit Property</h2>

    <form action="{{ route('admin.properties.update', $property->id) }}" method="POST" enctype="multipart/form-data" class="card p-4 shadow-sm">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                   value="{{ old('name', $property->name) }}">
            @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Type:</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type"
                   value="{{ old('type', $property->type) }}">
            @error('type') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price (₹):</label>
            <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" id="price" name="price"
                   value="{{ old('price', $property->price) }}">
            @error('price') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="area_sqft" class="form-label">Area (sqft):</label>
            <input type="number" class="form-control @error('area_sqft') is-invalid @enderror" id="area_sqft" name="area_sqft"
                   value="{{ old('area_sqft', $property->area_sqft) }}">
            @error('area_sqft') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address:</label>
            <textarea class="form-control @error('address') is-invalid @enderror" id="address" name="address" rows="2">{{ old('address', $property->address) }}</textarea>
            @error('address') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3">{{ old('description', $property->description) }}</textarea>
            @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="image_path" class="form-label">Current Image:</label><br>
            @if($property->image_path)
                <img src="{{ asset('storage/' . $property->image_path) }}" alt="Property Image" class="img-thumbnail mb-2" width="120">
            @else
                <p class="text-muted">No image uploaded.</p>
            @endif
            <input type="file" class="form-control @error('image_path') is-invalid @enderror" id="image_path" name="image_path">
            @error('image_path') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="btn btn-success">Update Property</button>
    </form>
</div>
@endsection
