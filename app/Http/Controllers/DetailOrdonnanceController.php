<?php

namespace App\Http\Controllers;

use App\Models\Detail_ordonnance;
use App\Http\Controllers\Controller;
use App\Models\Medicament;
use App\Models\Ordonnance;
use Illuminate\Http\Request;

class DetailOrdonnanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detail_ordonnances = Detail_ordonnance::all();
        return view('detail_ordonnance.index', compact('detail_ordonnances'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ordonnances = Ordonnance::all();
        $medicaments = Medicament::all();
        return view('detail_ordonnance.create', compact('ordonnances', 'medicaments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'ordonnance_id' => 'required|string|max:255',
            'medicament_id' => 'required|string|max:255',
            'dosage' => 'required|string|max:255',
        ]);
        Detail_ordonnance::create($request->all());
        return redirect()->route('detail_ordonnance.index')->with('success','Le detail_ordonnance a été créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Detail_ordonnance $detail_ordonnance)
    {
        return view('detail_ordonnance.show', compact('detail_ordonnance'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Detail_ordonnance $detail_ordonnance)
    {
        $ordonnances = Ordonnance::all();
        $medicaments = Medicament::all();
        return view('detail_ordonnance.edit', compact('detail_ordonnance', 'ordonnances', 'medicaments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Detail_ordonnance $detail_ordonnance)
    {
        $request->validate([
            'ordonnance_id' => 'required|string|max:255',
            'medicament_id' => 'required|string|max:255',
            'dosage' => 'required|string|max:255',
        ]);
        $detail_ordonnance->update([
            'ordonnance_id' => $request->input('ordonnance_id'),
            'medicament_id' => $request->input('medicament_id'),
            'dosage' => $request->input('dosage'),
        ]);
        return redirect()->route('detail_ordonnance.index')->with('modif', 'Le detail_ordonnance a été modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Detail_ordonnance $detail_ordonnance)
    {
        $detail_ordonnance->delete();
        return redirect()->route('detail_ordonnance.index')->with('supp', 'Le detail_ordonnance a été supprimé avec succès.');
    }
}
