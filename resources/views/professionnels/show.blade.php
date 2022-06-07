{{-- Directive Blade qui permet de spécifier l'héritage --}}

@extends('cvtheque')

{{-- Injection du contenu dans la section spécifiée dans le thème principal --}}
{{-- Ici liaison avec la directive yield --}}

@section("contenu")
    @if(session('information'))
        <div class="alert-container-perso bg-gradient-success mb-4">
            {{session('information')}}
        </div>
    @endif

    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">{{$titreSecondaire}}</h6>
            <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                     aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Actions :</div>
{{--                    <a class="dropdown-item" href="{{route('metiers.edit')}}">Modifier</a>--}}
{{--                    <a class="dropdown-item" href="{{route('metiers.deleteInside')}}">Supprimer</a>--}}
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route('professionnels.index')}}">Retour</a>
                </div>
            </div>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <form method="post" action="{{route('professionnels.store')}}">
                @method('POST')
                @csrf


                <div class="form-group col-xl-12 col-perso">
                    <input class="input-perso form-control form-control-user" type="text" name="metier" value="{{$professionnel->metier->libelle}}" readonly>

                    <div class="radio-container offset-xl-2">
                        Activité de formation déjà effectuée ?
                        <div class="radio-content custom-radio">
                            @if($professionnel->formation == 1) Oui @else Non @endif
                        </div>
                    </div>
                </div>

                <div class="form-group col-xl-12 col-perso">
                    <input type="text" class="input-perso form-control form-control-user"
                           placeholder="Nom" value="{{$professionnel->nom}}" name="nom" readonly>
                    <input type="text" class="input-perso form-control form-control-user"
                           placeholder="Prénom" value="{{$professionnel->prenom}}" name="prenom" readonly>
                </div>
                <div class="form-group col-xl-12 col-perso">
                    <input type="date" class="input-perso form-control form-control-user"
                           placeholder="Date de naissance" value="{{$professionnel->naissance}}"
                           name="naissance" readonly>
                </div>
                <div class="form-group col-xl-12 col-perso">
                    <input type="text" class="input-perso form-control form-control-user"
                           placeholder="Code postal" value="{{$professionnel->cp}}" name="cp" readonly>
                    <input type="text" class="input-perso form-control form-control-user"
                           placeholder="Ville" value="{{$professionnel->ville}}" name="ville" readonly>
                </div>
                <div class="form-group col-xl-12 col-perso">
                    <input type="tel" class="input-perso form-control form-control-user"
                           placeholder="Téléphone" value="{{$professionnel->telephone}}" name="telephone" readonly>
                    <input type="text" class="input-perso form-control form-control-user"
                           placeholder="E-mail" value="{{$professionnel->email}}" name="email" readonly>
                </div>
                <div class="form-group col-xl-12 col-perso">
                    <div class="checkbox-container" >
                        <span class="span-perso-pro">Domaine(s) :</span>
                        @if(is_array($professionnel->domaine) && in_array('R', $professionnel->domaine)) Réseaux - @endif
                        @if(is_array($professionnel->domaine) && in_array('S', $professionnel->domaine)) Systèmes - @endif
                        @if(is_array($professionnel->domaine) && in_array('D', $professionnel->domaine)) Développement @endif
                    </div>
                </div>
                <div class="form-group col-xl-12 col-perso">
                    <input type="text" class="input-perso form-control form-control-userid"
                           placeholder="Source" value="{{$professionnel->source}}" name="source" readonly>
                    <div class="col-xl-6">
                        Compétences :
                        @foreach($professionnel->competences as $competence)
                            {{$competence->intitule}} /
                        @endforeach
                    </div>
                </div>



                <div class="form-group col-xl-12 col-perso">
                    <a href="{{asset('storage/cv/'. $professionnel->id . '/' .$professionnel->pdf)}}" download>test</a>
                </div>

                <div class="form-group col-xl-12 col-perso">
                    <textarea class="textarea-perso form-control form-control-user" rows="5" cols="50" name="observation" placeholder="Observation" readonly>{{$professionnel->observation}}</textarea>
                </div>

                <div class="col-xl-6 col-perso">
                    <a href="{{route('professionnels.index')}}" class="btn btn-info btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-left"></i>
                                        </span>
                        <span class="text">Retour</span>
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
