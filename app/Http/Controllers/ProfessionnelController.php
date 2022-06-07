<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Competence, Professionnel, Metier};
use App\Http\Requests\ProfessionnelRequest;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProfessionnelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug = '')
    {
        $metiers = Metier::orderBy('libelle')->get();

        $professionnels = $slug ?
            Metier::where('slug', $slug)->firstOrfail()->professionnels()->get() :
            Professionnel::get();

        $data = [
            'title' => 'Les professionnels de la : ' . config('app.name'),
            'description' => 'Retrouver toutes les professionnels de la ' . config('app.name'),
            'professionnels' => $professionnels,
            'metiers' => $metiers,
            'slug' => $slug,
        ];

        return view('professionnels.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $metiers = Metier::orderBy('libelle')->get();
        $competences = Competence::orderBy('intitule')->get();

        $data = [
            'title' => 'Fiche professionnel - Ajout',
            'titreSecondaire' => 'Fiche professionnel - Ajout',
            'metiers' => $metiers,
            'competences' => $competences,
        ];

        return view('professionnels.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ProfessionnelRequest $professionnelRequest
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ProfessionnelRequest $professionnelRequest)
    {

        $validateData = $professionnelRequest->all();

        $validateData['domaine'] = implode(',', $professionnelRequest->input('domaine'));

        $newProfessionnel = Professionnel::create($validateData);

        $newProfessionnel->competences()->attach($professionnelRequest->comp);

//        $extension = $professionnelRequest->file('pdf')->getClientOriginalExtension();
//        $filename = Str::slug($newProfessionnel->nom) . '-' . $newProfessionnel->id . '.' .$extension;
//        $path = $professionnelRequest->file('pdf')->storeAs('public/cv/' . $newProfessionnel->id, $filename);
//        $newProfessionnel->pdf = $path;
//        $newProfessionnel->save();


        $succes = "Professionnel enregistré !";

        return redirect()->route('professionnels.index')->withInformation($succes);
    }

    /**
     * Display the specified resource.
     *
     * @param  object $professionnel
     * @return \Illuminate\Http\Response
     */
    public function show(Professionnel $professionnel)
    {
        $professionnel->domaine = explode(',', $professionnel->domaine);

        $data = [
            'title' => 'Fiche professionnel - Consultation',
            'professionnel' => $professionnel,
            'titreSecondaire' => 'Fiche professionnel - Consultation',
        ];

        return view('professionnels.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  object $professionnel
     * @return \Illuminate\Http\Response
     */
    public function edit(Professionnel $professionnel)
    {
        $professionnel->domaine = explode(',', $professionnel->domaine);
        $metiers = Metier::orderBy('libelle')->get();
        $competences = Competence::orderBy('intitule')->get();

        $data = [
            'title' => 'Fiche professionnel - Modification',
            'professionnel' => $professionnel,
            'metiers' => $metiers,
            'competences' => $competences,
            'titreSecondaire' => 'Fiche professionnel - Modification',
        ];

        return view('professionnels.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\ProfessionnelRequest $professionelRequest
     * @param object $professionnel
     * @return \Illuminate\Http\Response
     */
    public function update(ProfessionnelRequest $professionnelRequest, Professionnel $professionnel)
    {
        $validateData = $professionnelRequest->all();

        $validateData['domaine'] = implode(',', $professionnelRequest->input('domaine'));

        $professionnel->update($validateData);

        $professionnel->competences()->sync($professionnelRequest->comp);

        $succes = "Professionnel mis à jour !";

        return redirect()->route('professionnels.index')->withInformation($succes);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  object $professionnel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Professionnel $professionnel)
    {
        $professionnel->delete();

        $succes = "Le professionnel a bien été supprimé !";

        return redirect()->route('professionnels.index')->withInformation($succes);
    }

    public function index2($slug = ''){
        $metiers = Metier::orderBy('libelle')->get();

        $professionnels = $slug ?
            Metier::where('slug', $slug)->firstOrfail()->professionnels()->paginate(6) :
            Professionnel::paginate(6);

        $data = [
            'title' => 'Les professionnels de la : ' . config('app.name'),
            'description' => 'Retrouver toutes les professionnels de la ' . config('app.name'),
            'professionnels' => $professionnels,
            'metiers' => $metiers,
            'slug' => $slug,
        ];

        return view('professionnels.index2', $data);
    }

    public function search(Request $request){
        $input = $request->input('searchFast');
        $professionnels = Professionnel::where(
            DB::raw('CONCAT(prenom, " ", nom)'), 'LIKE', '%' . $input . '%')
            ->orWhere(DB::raw('CONCAT(nom, " ", prenom)'), 'LIKE', '%' . $input . '%')
            ->orderBy('nom')->paginate(6);

        $data = [
            'title' => 'Les professionnels de la : ' . config('app.name'),
            'description' => 'Retrouver tous les professionnels de la ' . config('app.name'),
            'professionnels' => $professionnels,
            'search' => $input,
        ];


        if (count($professionnels) > 0){
            return view('professionnels.indexSearch', $data);
        }else{
            $error = "Aucun professionnel ne correspond à la recherche";
            return back()->withError($error);
        }
    }


}
