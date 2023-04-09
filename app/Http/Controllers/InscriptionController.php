<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use Illuminate\Http\Request;
 

class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('index');

    }
    public function inscription()
{
    return view('inscription');
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'level' => 'required',
            'nomeleve' => 'required',
            'prenomeleve' => 'required',
            'sexe' => 'required',
            'etablisement' => 'required',
            'date' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'tele' => 'required',
            'adresse' => 'required',
            'profession`' => 'required',
            'email' => 'required',
        ]);
    
        $inscription = new Inscription();
        $inscription->level = $request->input('level');
        $inscription->nom = $request->input('nom');
        $inscription->prenom  = $request->input('prenom ');
        $inscription->sexe = $request->input('sexe');
        $inscription->etablisement  = $request->input('etablisement');
        $inscription->date = $request->input('date');
        $inscription->nom = $request->input('nom ');
        $inscription->prenom  = $request->input('prenom');
        $inscription->tele = $request->input('tele');
        $inscription->adresse = $request->input('adresse');
        $inscription->profession = $request->input('profession');
        $inscription->email = $request->input('email');
        $inscription->save();
        
        return redirect()->route('Inscription')
                         ->with('success', 'Inscription created successfully');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(Inscription $inscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inscription $inscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inscription $inscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inscription $inscription)
    {
        //
    }
}
