<?php

namespace App\Http\Controllers;

use App\Models\Analyse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Traitement;

class AnalyseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $analyses = Analyse::all();
        return view('analyse.index', compact('analyses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $traitements = Traitement::all();
        return view('analyse.create', compact('traitements'));
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
        Analyse::create($request->all());
        return redirect()->route('analyse.index')->with('success', 'Le analyse a été créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Analyse $analyse)
    {
        return view('analyse.show', compact('analyse'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Analyse $analyse)
    {
        $traitements = Traitement::all();
        return view('analyse.edit', compact('analyse', 'traitements'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Analyse $analyse)
    {
        $request->validate([
            'date' => 'required|date',
            'traitement_id' => 'required|string|max:255',
        ]);
        $analyse->update([
            'date' => $request->input('date'),
            'traitement_id' => $request->input('traitement_id'),
        ]);
        return redirect()->route('analyse.index')->with('modif', 'Le analyse a été modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Analyse $analyse)
    {
        $analyse->delete();
        return redirect()->route('analyse.index')->with('supp', 'Le analyse a été supprimé avec succès.');
    }
}
