<?php

namespace App\Http\Controllers;

use App\Models\Professionnel;
use Illuminate\Http\Request;
use App\Models\Competence;
use App\Http\Requests\CompetenceRequest;
use Symfony\Component\Console\Input\Input;
use function PHPUnit\Framework\isEmpty;

class CompetenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return 'Je passe ici';
//        $competences = Competence::all();
        $competences = Competence::get();
//        $competences = Competence::orderBy('id','desc')->get();
//        $competences = Competence::orderByDesc('intitule')->get();
//        $competences = Competence::orderBy('intitule')->get();
//        $competences = Competence::where('intitule', '=', 'scrum')->get();
//        dd($competences); = var_dump() + die()
        $data = [
            'title' => 'Les compétences de la : ' . config('app.name'),
            'description' => 'Retrouver toutes les compétences de la ' . config('app.name'),
            'competences' => $competences,
        ];

//        return view('competences.index', compact('competences')); si pas de tableaux data
        return view('competences.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => 'Fiche compétence - Ajout',
            'titreSecondaire' => 'Fiche compétence - Ajout',
        ];

        return view('competences.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param
     * @return \Illuminate\Http\Response
     */
    public function store(CompetenceRequest $competenceRequest)
    {
        $validateData = $competenceRequest->all();
//        dd($validateData);
        Competence::create($validateData);

        $succes = 'Compétence enregistrée !';

        return redirect()->route('competences.index')->withInformation($succes);
    }

    /**
     * Display the specified resource.
     *
     * @param  object  $competence
     * @return \Illuminate\Http\Response
     */
    public function show(Competence $competence)
    {
        $data = [
            'title' => 'Fiche compétence',
            'competence' => $competence,
            'titreSecondaire' => 'Fiche compétence',
        ];

        return view('competences.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  object $competence
     * @return \Illuminate\Http\Response
     */
    public function edit(Competence $competence)
    {
        $data = [
            'title' => 'Fiche compétence - Modification',
            'competence' => $competence,
            'titreSecondaire' => 'Fiche compétence - Modification',
        ];

        return view('competences.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\CompetenceRequest $competenceRequest
     * @param  object $competence
     * @return \Illuminate\Http\Response
     */
    public function update(CompetenceRequest $competenceRequest, Competence $competence)
    {
        $validateData = $competenceRequest->all();
//        dd($validateData);
        $competence->update($validateData);

        $succes = "Compétence modifiée avec succès !";

        return redirect()->route('competences.index')->withInformation($succes);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  object $competence
     * @return \Illuminate\Http\Response
     */
    public function destroy(Competence $competence)
    {
        $competence->delete();

        $succes = "La compétence a bien été supprimée !";

        return back()->withInformation($succes);
    }

    /**
     * Remove, from show's form, the specified resource from storage.
     *
     * @param  object $competence
     * @return \Illuminate\Http\Response
     */
    public function destroyInside(Competence $competence)
    {
        $competence->delete();

        $succes = "La compétence a bien été supprimée !";

        return redirect()->route('competences.index')->withInformation($succes);
    }

    /**
     * Display a second listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index2()
    {
        $competences = Competence::orderBy('intitule')->paginate(6);
        $data = [
            'title' => 'Les compétences de la : ' . config('app.name'),
            'description' => 'Retrouver toutes les compétences de la ' . config('app.name'),
            'competences' => $competences,
        ];

        return view('competences.index2', $data);
    }

    public function search(Request $request){
        $input = $request->input('search');
        $competences = Competence::where('intitule', 'LIKE', '%' . $input . '%')->orderBy('intitule')->paginate(6);

        $data = [
            'title' => 'Les compétences de la : ' . config('app.name'),
            'description' => 'Retrouver toutes les compétences de la ' . config('app.name'),
            'competences' => $competences,
            'search' => $input,
        ];


        if (count($competences) > 0){
            return view('competences.index2', $data);
        }else{
            $error = "Aucune compétence ne correspond à la recherche";
            return back()->withError($error);
        }
    }

    public function proByComp(Request $request){

        $input = $request->input('searchComp');
        $competences = Competence::where('intitule', 'LIKE', '%' . $input . '%')->orderBy('intitule')->paginate(6);


        foreach ($competences as $comp){
            $pros[] = $comp->professionnels()->get();
        }

        $data = [
            'title' => 'Les compétences de la : ' . config('app.name'),
            'description' => 'Retrouver toutes les compétences de la ' . config('app.name'),
            'competences' => $competences,
            'professionnels' => $pros,
            'searchComp' => $input,
        ];

        return view('competences.proByComp', $data);

    }


}
