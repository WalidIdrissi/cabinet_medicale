<?php

namespace App\Http\Controllers;

use App\Models\Rendez_vous_medicale;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;

class RendezVousMedicaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rendez_vous = Rendez_vous_medicale::all();
        return view('rendez_vous.index', compact('rendez_vous'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $patients = Patient::all();
        return view('rendez_vous.create', compact('patients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'patient_id' => 'required|string|max:255',
            'date' => 'required|date',
            'heure' => 'required|dateTime',
            'type' => 'required|string|max:255',
            'statut' => 'required|string|max:255',
        ]);
        Rendez_vous_medicale::create($request->all());
        return redirect()->route('rendez_vous.index')->with('success', 'Le rendez_vous a été créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rendez_vous_medicale $rendez_vous)
    {
        return view('rendez_vous.show', compact('rendez_vous'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rendez_vous_medicale $rendez_vous)
    {
        $patients = Patient::all();
        return view('rendez_vous.edit', compact('rendez_vous', 'patients'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rendez_vous_medicale $rendez_vous)
    {
        $request->validate([
            'patient_id' => 'required|string|max:255',
            'date' => 'required|date',
            'heure' => 'required|dateTime',
            'type' => 'required|string|max:255',
            'statut' => 'required|string|max:255',
        ]);
        $rendez_vous->update([
            'patient_id' => $request->input('patient_id'),
            'date' => $request->input('date'),
            'heure' => $request->input('heure'),
            'type' => $request->input('type'),
            'statut' => $request->input('statut'),
        ]);
        return redirect()->route('rendez_vous.index')->with('modif', 'Le rendez_vous a été modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rendez_vous_medicale $rendez_vous)
    {
        $rendez_vous->delete();
        return redirect()->route('rendez_vous.index')->with('supp', 'Le rendez_vous a été supprimé avec succès.');
    }
}
