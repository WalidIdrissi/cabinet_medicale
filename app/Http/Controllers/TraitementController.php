<?php

namespace App\Http\Controllers;

use App\Models\Traitement;
use App\Http\Controllers\Controller;
use App\Models\Rendez_vous_medicale;
use App\Models\Type_traitement;
use Illuminate\Http\Request;

class TraitementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $traitements = Traitement::all();
        return view('traitement.index', compact('traitements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Rendez_vous_medicales = Rendez_vous_medicale::all();
        $type_traitements = Type_traitement::all();
        return view('traitement.create', compact('Rendez_vous_medicales', 'type_traitements'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Rendez_vous_medicale_id' => 'required|string|max:255',
            'date' => 'required|date',
            'type_traitement_id' => 'required|string|max:255',
            'statut_paiement' => 'required|string|max:255',
        ]);
        Traitement::create($request->all());
        return redirect()->route('traitement.index')->with('success','Le traitement a été créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Traitement $traitement)
    {
        return view('traitement.show', compact('traitement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Traitement $traitement)
    {
        $Rendez_vous_medicales = Rendez_vous_medicale::all();
        $type_traitements = Type_traitement::all();
        return view('traitement.edit', compact('traitement', 'Rendez_vous_medicales', 'type_traitements'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Traitement $traitement)
    {
        $request->validate([
            'Rendez_vous_medicale_id' => 'required|string|max:255',
            'date' => 'required|date',
            'type_traitement_id' => 'required|string|max:255',
            'statut_paiement' => 'required|string|max:255',
        ]);
        $traitement->update([
            'Rendez_vous_medicale_id' => $request->input('Rendez_vous_medicale_id'),
            'date' => $request->input('date'),
            'type_traitement_id' => $request->input('type_traitement_id'),
            'statut_paiement' => $request->input('statut_paiement'),
        ]);
        return redirect()->route('traitement.index')->with('modif', 'Le traitement a été modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Traitement $traitement)
    {
        $traitement->delete();
        return redirect()->route('traitement.index')->with('supp', 'Le traitement a été supprimé avec succès.');
    }
}
