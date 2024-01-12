<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CapcaController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'code' => 'nullable|string',
            'img' => 'nullable|string',
            'status' => 'nullable|integer',
            'A' => 'nullable|integer',
            'B' => 'nullable|integer',
            'C' => 'nullable|integer',
            'D' => 'nullable|integer',
        ]);

        $capca = Capca::create($validatedData);

        return response()->json(['message' => 'Capca created successfully', 'data' => $capca], 201);
    }
}
