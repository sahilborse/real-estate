@extends('layouts.app')

@section('title', 'All Properties')

@section('content')
<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>All Properties</h2>

        <form method="GET" action="{{ route('user.properties.index') }}" class="d-flex align-items-center">
            <label for="per_page" class="me-2">Properties per page:</label>
            <select name="per_page" class="form-select form-select-sm w-auto" onchange="this.form.submit()">
                <option value="5" {{ $perPage == 5 ? 'selected' : '' }}>5</option>
                <option value="10" {{ $perPage == 10 ? 'selected' : '' }}>10</option>
            </select>
        </form>
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
                        <a href="{{ route('user.properties.show', $property->id) }}" class="text-decoration-none fw-semibold">
                            {{ $property->name }}
                        </a>
                    </td>
                    <td>{{ $property->type }}</td>
                    <td>{{ number_format($property->price) }}</td>
                    <td>{{ $property->area_sqft }}</td>
                    <td>{{ $property->address }}</td>
                    <td>
                        @if($property->image_path)
                            <img src="{{ asset('storage/' . $property->image_path) }}" class="img-thumbnail" width="100">
                        @else
                            <span class="text-muted">No image</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('user.properties.book', $property->id) }}" class="btn btn-sm btn-primary">Book</a>
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

    <div class="mt-4">
        {{ $properties->appends(['per_page' => $perPage])->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection
