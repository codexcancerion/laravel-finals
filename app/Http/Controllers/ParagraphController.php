<?php
namespace App\Http\Controllers;

use App\Models\Paragraph;
use Illuminate\Http\Request;

class ParagraphController extends Controller
{
    // Retrieve all Paragraph entries
    public function index()
    {
        return Paragraph::all();
    }

    // Create a new Paragraph entry
    public function store(Request $request)
    {
        $data = $request->validate([
            'home' => 'required|string',
            'testimonials' => 'required|string',
        ]);

        return Paragraph::create($data);
    }

    // Update a Paragraph entry
    public function update(Request $request, Paragraph $paragraph)
    {
        $data = $request->validate([
            'home' => 'nullable|string',
            'testimonials' => 'nullable|string',
        ]);

        $paragraph->update($data);
        return $paragraph;
    }

    // Update a specific field in a Paragraph entry
    public function updateField(Request $request, Paragraph $paragraph, $field)
    {
        $data = $request->validate([
            $field => 'required|string',
        ]);

        $paragraph->update($data);
        return $paragraph;
    }

    // Retrieve a specific Paragraph entry
    public function show(Paragraph $paragraph)
    {
        return $paragraph;
    }

    // Retrieve a specific field from a Paragraph entry
    public function getField(Paragraph $paragraph, $field)
    {
        if (!array_key_exists($field, $paragraph->getAttributes())) {
            return response()->json(['error' => 'Field not found'], 404);
        }

        return response()->json([$field => $paragraph->$field]);
    }
}
