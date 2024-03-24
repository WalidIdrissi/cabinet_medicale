<?php

namespace App\Http\Controllers;

use App\Models\Type_traitement;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TypeTraitementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $type_traitements = Type_traitement::all();
        return view('type_traitement.index', compact('type_traitements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('type_traitement.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'type_traitement' => 'required|string|max:255',
        ]);
        Type_traitement::create($request->all());
        return redirect()->route('type_traitement.index')->with('success', 'Le type_traitement a été créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Type_traitement $type_traitement)
    {
        return view('type_traitement.show', compact('type_traitement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Type_traitement $type_traitement)
    {
        return view('type_traitement.edit', compact('type_traitement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Type_traitement $type_traitement)
    {
        $request->validate([
            'type_traitement' => 'required|string|max:255',
        ]);
        $type_traitement->update([
            'type_traitement' => $request->input('type_traitement'),

        ]);
        return redirect()->route('type_traitement.index')->with('modif', 'Le type_traitement a été modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type_traitement $type_traitement)
    {
        $type_traitement->delete();
        return redirect()->route('type_traitement.index')->with('supp', 'Le type_traitement a été supprimé avec succès.');
    }
}
