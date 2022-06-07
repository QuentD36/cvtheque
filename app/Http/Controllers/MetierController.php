<?php

namespace App\Http\Controllers;

use App\Http\Requests\MetierRequest;
use Illuminate\Http\Request;
use App\Models\Metier;
use App\Http\Requests\CompetenceRequest;

class MetierController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $metiers = Metier::get();

        $data = [
            'title' => 'Les métiers de la : ' . config('app.name'),
            'description' => 'Retrouver tous les métiers de la ' . config('app.name'),
            'metiers' => $metiers,
        ];

        return view('metiers.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => 'Fiche métier - Ajout',
            'titreSecondaire' => 'Fiche métier - Ajout',
        ];

        return view('metiers.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\MetierRequest $metierRequest
     * @return \Illuminate\Http\Response
     */
    public function store(MetierRequest $metierRequest)
    {
        $validateData = $metierRequest->all();

        Metier::create($validateData);

        $succes = "Métier enregistré !";

        return redirect()->route('metiers.index')->withInformation($succes);
    }

    /**
     * Display the specified resource.
     *
     * @param  object $metier
     * @return \Illuminate\Http\Response
     */
    public function show(Metier $metier)
    {
        $data = [
            'title' => 'Fiche métier - Consultation',
            'metier' => $metier,
            'titreSecondaire' => 'Fiche métier - Consultation',
        ];

        return view('metiers.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  object $metier
     * @return \Illuminate\Http\Response
     */
    public function edit(Metier $metier)
    {
        $data = [
            'title' => 'Fiche compétence - Modification',
            'metier' => $metier,
            'titreSecondaire' => 'Fiche compétence - Modification',
        ];

        return view('metiers.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\MetierRequest $metierRequest
     * @param  object $metier
     * @return \Illuminate\Http\Response
     */
    public function update(MetierRequest $metierRequest, Metier $metier)
    {
        $validateData = $metierRequest->all();

        $metier->update($validateData);

        $succes = "Métier modifié avec succès !";

        return redirect()->route('metiers.index')->withInformation($succes);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  object $metier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Metier $metier)
    {
        $metier->delete();

        $succes = "Métier supprimé avec succes !";

        return redirect()->route('metiers.index')->withInformation($succes);
    }

    /**
     * Show the form before destroy()
     *
     * @param object $metier
     * @return \Illuminate\Http\Response
     */
    public function delete(Metier $metier){

        $data = [
            'title' => 'Fiche métier - Consultation',
            'metier' => $metier,
            'titreSecondaire' => 'Fiche métier - Consultation',
        ];

        return view('metiers.delete',$data);
    }
}
