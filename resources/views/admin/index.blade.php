@extends('layouts.app')

@section('title', 'All Properties')

@section('content')
<div class="container my-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>All Properties</h2>
        <a href="{{ route('admin.properties.create') }}" class="btn btn-primary">+ Add Property</a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle text-center">
            <thead class="table-dark">
                <tr>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Price (₹)</th>
                    <th>Area (sqft)</th>
                    <th>Address</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($properties as $property)
                <tr>
                    <td>
                        <a href="{{ route('admin.properties.show', $property->id) }}" target="_blank" class="text-decoration-none fw-bold">
                            {{ $property->name }}
                        </a>
                    </td>
                    <td>{{ $property->type }}</td>
                    <td>{{ number_format($property->price) }}</td>
                    <td>{{ $property->area_sqft }}</td>
                    <td>{{ $property->address }}</td>
                    <td>
                        @if($property->image_path)
                            <img src="{{ asset('storage/app/public/' . $property->image_path) }}" class="img-thumbnail" width="100">
                        @else
                            <span class="text-muted">No image</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.properties.edit', $property->id) }}" class="btn btn-sm btn-warning mb-1">Edit</a>
                        <form action="{{ route('admin.properties.destroy', $property->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Delete this property?')" class="btn btn-sm btn-danger">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-muted">No properties found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
