<?php

namespace App\Http\Controllers;

use App\Models\Termek;
use Illuminate\Http\Request;

class TermekController extends Controller
{
    // Összes lekérdezése
    public function index()
    {
        return response()->json(Termek::all());
    }

    //lekérdezés ID alapján
    public function show($id)
    {
        $termek = Termek::find($id);

        if (!$termek) {
            return response()->json(['message' => 'Termék nem található'], 404);
        }

        return response()->json($termek);
    }

    // Új termék
    public function store(Request $request)
    {
        $validated = $request->validate([
            'elnevezes' => 'required|string|max:35',
            'ar' => 'required|numeric|min:0',
            'leiras' => 'required|string',
        ]);

        $termek = Termek::create($validated);

        return response()->json($termek, 201);
    }

    //frissítése ID alapján
    public function update(Request $request, $id)
    {
        $termek = Termek::find($id);

        if (!$termek) {
            return response()->json(['message' => 'Termék nem található'], 404);
        }
        
        $validated = $request->validate([
            'elnevezes' => 'string|max:35',
            'ar' => 'numeric|min:0',
            'leiras' => 'string',
        ]);

        $termek->update($validated);
        return response()->json($termek);
    }

    //törlése ID alapján
    public function destroy($id)
    {
        $termek = Termek::find($id);

        if (!$termek) {
            return response()->json(['message' => 'Termék nem található'], 404);
        }

        $termek->delete();
        return response()->json(['message' => 'Termék törölve']);
    }
}
