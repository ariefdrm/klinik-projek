<?php

namespace App\Http\Controllers;

use App\Models\Poly;
use Illuminate\Http\Request;

class PolyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Poly::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string',
            'biaya' => 'required|integer',
        ]);

        $poly = Poly::create($validated);

        return response()->json([
            'message' => 'Poly created successfully',
            'data' => $poly
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $poly = Poly::find($id);

        if (!$poly) {
            return response()->json(['error' => 'Poly not found'], 404);
        }

        return response()->json($poly, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $poly = Poly::find($id);

        if (!$poly) {
            return response()->json(['error' => 'Poly not found'], 404);
        }

        $validated = $request->validate([
            'nama' => 'sometimes|required|string',
            'biaya' => 'sometimes|required|integer',
        ]);

        $poly->update($validated);

        return response()->json([
            'message' => 'Poly updated successfully',
            'data' => $poly
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $poly = Poly::find($id);

        if (!$poly) {
            return response()->json(['error' => 'Poly not found'], 404);
        }

        $poly->delete();

        return response()->json(['message' => 'Poly deleted successfully'], 200);
    }
}
