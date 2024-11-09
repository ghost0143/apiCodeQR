<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Qrcode;


class QrcodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $qrcodes = Qrcode::all();
        return response()->json($qrcodes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'author' => 'required|string|max:255',
            'data' => 'required|string',
        ]);
    
        $qrcode = Qrcode::create($validated);
    
        return response()->json($qrcode, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $qrcode = Qrcode::findOrFail($id);
        return response()->json($qrcode);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'author' => 'required|string|max:255',
            'data' => 'required|string',
        ]);
    
        $qrcode = Qrcode::findOrFail($id);
        $qrcode->update($validated);
    
        return response()->json($qrcode);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $qrcode = Qrcode::findOrFail($id);
        $qrcode->delete();

        return response()->json(null, 204);
    }
}
