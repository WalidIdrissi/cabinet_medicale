<?php

namespace App\Http\Controllers;

use App\Models\Cabinet;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CabinetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cabinets = Cabinet::all();
        return view('cabinet.index', compact('cabinets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cabinet.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'adresse' => 'required|string|max:255',
            'telephone' => 'required|string|max:255',
            'nom_cabinet' => 'required|string|max:255',
            'nom_docteur' => 'required|string|max:255',
        ]);
        Cabinet::create($request->all());
        return redirect()->route('cabinet.index')->with('success', 'Le cabinet a été créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cabinet $cabinet)
    {
        return view('cabinet.show', compact('cabinet'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cabinet $cabinet)
    {
        return view('cabinet.edit', compact('cabinet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cabinet $cabinet)
    {
        $request->validate([
            'adresse' => 'required|string|max:255',
            'telephone' => 'required|string|max:255',
            'nom_cabinet' => 'required|string|max:255',
            'nom_docteur' => 'required|string|max:255',
        ]);
        $cabinet->update([
            'adresse' => $request->input('adresse'),
            'telephone' => $request->input('telephone'),
            'nom_cabinet' => $request->input('nom_cabinet'),
            'nom_docteur' => $request->input('nom_docteur'),
        ]);
        return redirect()->route('cabinet.index')->with('modif', 'Le cabinet a été modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cabinet $cabinet)
    {
        $cabinet->delete();
        return redirect()->route('cabinet.index')->with('supp', 'Le cabinet a été supprimé avec succès.');
    }
}
