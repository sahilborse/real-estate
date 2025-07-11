<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = Property::all();
        return view('admin.index', compact('properties'));
    }

    public function create()
    {   
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'price' => 'required|numeric',
            'area_sqft' => 'required|integer',
            'address' => 'required|string',
            'description' => 'nullable|string',
            'image_path' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image_path')) {
            $validated['image_path'] = $request->file('image_path')->store('properties', 'public');
        }

        Property::create($validated);

        return redirect()->route('admin.properties.index')->with('success');
    }
    public function show($id)
    {
        $property = Property::findOrFail($id);
        return view('admin.show', compact('property'));
    }
    public function edit($id)
    {
        $property = Property::findOrFail($id);
        return view('admin.edit', compact('property'));
    }

    public function update(Request $request, $id)
    {
        $property = Property::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'price' => 'required|numeric',
            'area_sqft' => 'required|integer',
            'address' => 'required|string',
            'description' => 'nullable|string',
            'image_path' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image_path')) {
            // Delete old image if exists
            if ($property->image_path) {
                Storage::disk('public')->delete($property->image_path);
            }
            $validated['image_path'] = $request->file('image_path')->store('properties', 'public');
        }

        $property->update($validated);

        return redirect()->route('admin.properties.index')->with('success', 'Property updated successfully!');
    }

    public function destroy($id)
    {
        $property = Property::findOrFail($id);

        if ($property->image_path) {
            Storage::disk('public')->delete($property->image_path);
        }

        $property->delete();

        return redirect()->route('admin.properties.index')->with('success');
    }
}
