<?php

namespace App\Http\Controllers;

use App\Models\Ordonnance;
use App\Http\Controllers\Controller;
use App\Models\Traitement;
use Illuminate\Http\Request;

class OrdonnanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ordonnances = Ordonnance::all();
        return view('ordonnance.index', compact('ordonnances'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $traitements = Traitement::all();
        return view('ordonnance.create', compact('traitements'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'traitement_id' => 'required|string|max:255',
        ]);
        Ordonnance::create($request->all());
        return redirect()->route('ordonnance.index')->with('success', 'Le ordonnance a été créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ordonnance $ordonnance)
    {
        return view('ordonnance.show', compact('ordonnance'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ordonnance $ordonnance)
    {
        $traitements = Traitement::all();
        return view('ordonnance.edit', compact('ordonnance', 'traitements'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ordonnance $ordonnance)
    {
        $request->validate([
            'date' => 'required|date',
            'traitement_id' => 'required|string|max:255',
        ]);
        $ordonnance->update([
            'date' => $request->input('date'),
            'traitement_id' => $request->input('traitement_id'),
        ]);
        return redirect()->route('ordonnance.index')->with('modif', 'Le ordonnance a été modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ordonnance $ordonnance)
    {
        $ordonnance->delete();
        return redirect()->route('ordonnance.index')->with('supp', 'Le ordonnance a été supprimé avec succès.');
    }
}
