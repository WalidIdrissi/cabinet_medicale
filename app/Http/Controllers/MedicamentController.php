<?php

namespace App\Http\Controllers;

use App\Models\Medicament;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MedicamentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medicaments = Medicament::all();
        return view('medicament.index', compact('medicaments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('medicament.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'medicament' => 'required|string|max:255',
        ]);
        Medicament::create($request->all());
        return redirect()->route('medicament.index')->with('success', 'Le medicament a été créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Medicament $medicament)
    {
        return view('medicament.show', compact('medicament'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Medicament $medicament)
    {
        return view('medicament.edit', compact('medicament'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Medicament $medicament)
    {
        $request->validate([
            'medicament' => 'required|string|max:255',
        ]);
        $medicament->update([
            'medicament' => $request->input('medicament'),
        ]);
        return redirect()->route('medicament.index')->with('modif', 'Le medicament a été modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medicament $medicament)
    {
        $medicament->delete();
        return redirect()->route('medicament.index')->with('supp', 'Le medicament a été supprimé avec succès.');
    }
}
