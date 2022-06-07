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
                    <a class="dropdown-item" href="{{route('competences.edit', $competence->id)}}">Modifier</a>
                    <a class="dropdown-item" href="{{route('competences.destroyInside', $competence->id)}}">Supprimer</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route('competences.index')}}">Retour</a>
                </div>
            </div>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="form-group col-xl-6 col-perso">
                <input type="text" class="form-control form-control-user"
                       placeholder="Intitulé" value="{{$competence->intitule}}" readonly>
            </div>
            <div class="form-group col-xl-6 col-perso">
                <textarea class="form-control form-control-user"
                       placeholder="Description" rows="5" cols="50" readonly>{{$competence->description}}
                </textarea>
            </div>
            <a href="{{route('competences.index')}}" class="btn btn-info btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-left"></i>
                                        </span>
                <span class="text">Retour</span>
            </a>
        </div>
    </div>
@endsection
