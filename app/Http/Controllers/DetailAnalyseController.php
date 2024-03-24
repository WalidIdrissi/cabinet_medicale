<?php

namespace App\Http\Controllers;

use App\Models\Detail_analyse;
use App\Http\Controllers\Controller;
use App\Models\Analyse;
use App\Models\Type_analyse;
use Illuminate\Http\Request;

class DetailAnalyseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detail_analyses = Detail_analyse::all();
        return view('detail_analyse.index', compact('detail_analyses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $analyses = Analyse::all();
        $type_analyses = Type_analyse::all();
        return view('detail_analyse.create', compact('analyses', 'type_analyses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'analyse_id' => 'required|string|max:255',
            'type_analyse_id' => 'required|string|max:255',
            'valeur' => 'required|string|max:255',
        ]);
        detail_analyse::create($request->all());
        return redirect()->route('detail_analyse.index')->with('success','Le detail_analyse a été créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Detail_analyse $detail_analyse)
    {
        return view('detail_analyse.show', compact('detail_analyse'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Detail_analyse $detail_analyse)
    {
        $analyses = Analyse::all();
        $type_analyses = Type_analyse::all();
        return view('detail_analyse.edit', compact('detail_analyse', 'analyses', 'type_analyses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Detail_analyse $detail_analyse)
    {
        $request->validate([
            'analyse_id' => 'required|string|max:255',
            'type_analyse_id' => 'required|string|max:255',
            'valeur' => 'required|string|max:255',
        ]);
        $detail_analyse->update([
            'analyse_id' => $request->input('analyse_id'),
            'type_analyse_id' => $request->input('type_analyse_id'),
            'valeur' => $request->input('valeur'),
        ]);
        return redirect()->route('detail_analyse.index')->with('modif', 'Le detail_analyse a été modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Detail_analyse $detail_analyse)
    {
        $detail_analyse->delete();
        return redirect()->route('detail_analyse.index')->with('supp', 'Le detail_analyse a été supprimé avec succès.');
    }
}
