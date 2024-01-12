<?php

namespace App\Http\Controllers;

use App\Models\capca;
use Illuminate\Http\Request;

class CapcaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('capca.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'code' => 'nullable|string',
            'img' => 'nullable|string',
            'status' => 'nullable|integer',
            'A' => 'nullable|integer',
            'B' => 'nullable|integer',
            'C' => 'nullable|integer',
            'D' => 'nullable|integer',
        ]);

        $capca = Capca::create($data);

        //img storelink save img in folder
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('img'), $filename);
            $capca->img = $request->root() . '/img/' . $filename;
            $capca->save();
        }
        return redirect()->route('capcas.index', ['id' => $capca->id])
        ->with('success', 'Capca created successfully.');

    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, capca $capca)
    {
        //update
        $data = $request->validate([
            'code' => 'nullable|string',
            'img' => 'nullable|string',
            'status' => 'nullable|integer',
            'A' => 'nullable|integer',
            'B' => 'nullable|integer',
            'C' => 'nullable|integer',
            'D' => 'nullable|integer',
        ]);
        if ($request->has('code')) {
            $capca->code = $data['code'];
        }
        if ($request->has('img')) {
            $capca->img = $data['img'];
        }
        if ($request->has('status')) {
            $capca->status = $data['status'];
        }
        if ($request->has('A')) {
            $capca->A = $data['A'];
        }
        if ($request->has('B')) {
            $capca->B = $data['B'];
        }
        if ($request->has('C')) {
            $capca->C = $data['C'];
        }
        if ($request->has('D')) {
            $capca->D = $data['D'];
        }
        $capca->save();
        return response()->json($capca,201);
    }
}
