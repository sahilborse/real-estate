<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Booking;

class PropertyRegisterController extends Controller
{
    //
    public function index(Request $request)
    {
        $perPage = $request->input('per_page', 10); // Default to 10
        $properties = Property::paginate($perPage);


        
        return view('bookings.index', compact('properties', 'perPage'));
    }
    public function show($id)
    {
        $property = Property::findOrFail($id);
        return view('bookings.show', compact('property'));
    }

    public function create($id)
    {
        $property = Property::findOrFail($id);
        return view('bookings.create', compact('property'));
    }

    public function bookViewing(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'preferred_datetime' => 'required|date',
        ]);

        Booking::create([
            'property_id' => $id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'preferred_datetime' => $request->preferred_datetime,
        ]);

        $booking = Booking::latest()->first();
        $property = Property::find($id);

        return view('bookings.success', [
            'booking' => $booking,
            'property_name' => $property ? $property->name : null,
            'property_cost' => $property ? $property->price : null,
        ]);
    }
}
