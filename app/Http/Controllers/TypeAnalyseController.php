<?php

namespace App\Http\Controllers;

use App\Models\Type_analyse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TypeAnalyseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $type_analyses = Type_analyse::all();
        return view('type_analyse.index', compact('type_analyses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('type_analyse.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'type_analyse' => 'required|string|max:255',
        ]);
        Type_analyse::create($request->all());
        return redirect()->route('type_analyse.index')->with('success', 'Le type_analyse a été créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Type_analyse $type_analyse)
    {
        return view('type_analyse.show', compact('type_analyse'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Type_analyse $type_analyse)
    {
        return view('type_analyse.edit', compact('type_analyse'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Type_analyse $type_analyse)
    {
        $request->validate([
            'type_analyse' => 'required|string|max:255',
        ]);
        $type_analyse->update([
            'type_analyse' => $request->input('type_analyse'),
        ]);
        return redirect()->route('type_analyse.index')->with('modif', 'Le type_analyse a été modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type_analyse $type_analyse)
    {
        $type_analyse->delete();
        return redirect()->route('type_analyse.index')->with('supp', 'Le type_analyse a été supprimé avec succès.');
    }
}
