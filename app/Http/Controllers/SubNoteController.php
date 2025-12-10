<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubNotes;

class SubNoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $SubNote = SubNotes::all();
        return response()->json($SubNote, 201);
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
        $data = $request->validate([
            'note_id' => 'required|integer',
            'content' => 'required|string|max:255',
        ]);


        $SubNote = SubNotes::create($data);

        return response()->json($SubNote, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $SubNote = SubNotes::findOrFail($id);
        return response()->json($SubNote);
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
        $Subnote = SubNotes::findOrFail($id);
        $data = $request->validate([
            'note_id' => 'required|integer',
            'content' => 'required|string|max:255',
        ]);

        
        $Subnote->update($data);
        return response()->json($Subnote);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $SubNote = SubNotes::findOrFail($id);
        $SubNote->delete();
        return response()->json(['message' => 'SubNote deleted successfully']);
    }
}
