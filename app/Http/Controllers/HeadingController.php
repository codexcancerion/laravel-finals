<?php
namespace App\Http\Controllers;

use App\Models\Heading;
use Illuminate\Http\Request;

class HeadingController extends Controller
{
    public function index()
    {
        return Heading::all();
    }
    
    public function store(Request $request)
    {
        $data = $request->validate([
            'home' => 'required|string',
            'about' => 'required|string',
            'service' => 'required|string',
            'price' => 'required|string',
            'testimonials' => 'required|string',
        ]);

        return Heading::create($data);
    }

    public function update(Request $request, Heading $heading)
    {
        $data = $request->validate([
            'home' => 'nullable|string',
            'about' => 'nullable|string',
            'service' => 'nullable|string',
            'price' => 'nullable|string',
            'testimonials' => 'nullable|string',
        ]);

        $heading->update($data);
        return $heading;
    }

    public function updateField(Request $request, Heading $heading, $field)
    {
        $data = $request->validate([
            $field => 'required|string',
        ]);

        $heading->update($data);
        return $heading;
    }

    // New method to retrieve a specific Heading entry
    public function show(Heading $heading)
    {
        return $heading;
    }

    // New method to retrieve a specific field from a Heading
    public function getField(Heading $heading, $field)
    {
        if (!array_key_exists($field, $heading->getAttributes())) {
            return response()->json(['error' => 'Field not found'], 404);
        }

        return response()->json([$field => $heading->$field]);
    }
}
