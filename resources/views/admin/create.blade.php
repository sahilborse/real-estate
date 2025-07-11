@extends('layouts.app')

@section('title', 'Add Property')

@section('content')

<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-body">
            <h3 class="mb-4">Add New Property</h3>

            <form action="{{ route('admin.properties.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Property Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
                    @error('name') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" name="type" id="type" class="form-control" value="{{ old('type') }}" required>
                    @error('type') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price (₹)</label>
                    <input type="number" step="0.01" name="price" id="price" class="form-control" value="{{ old('price') }}" required>
                    @error('price') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label for="area_sqft" class="form-label">Area (sqft)</label>
                    <input type="number" name="area_sqft" id="area_sqft" class="form-control" value="{{ old('area_sqft') }}" required>
                    @error('area_sqft') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <textarea name="address" id="address" rows="3" class="form-control" required>{{ old('address') }}</textarea>
                    @error('address') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" rows="3" class="form-control" required>{{ old('description') }}</textarea>
                    @error('description') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label for="image_path" class="form-label">Image</label>
                    <input type="file" name="image_path" id="image_path" class="form-control">
                    @error('image_path') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>

                <button type="submit" class="btn btn-primary">Add Property</button>
            </form>
        </div>
    </div>
</div>

@endsection
