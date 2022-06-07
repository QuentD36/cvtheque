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
{{--                    <a class="dropdown-item" href="">Supprimer</a>--}}
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route('metiers.index')}}">Retour</a>
                </div>
            </div>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <form method="post" action="{{route('metiers.update',array('metier' => $metier->id))}}">
                @method('PUT')
                @csrf

                <div class="form-group col-xl-12 col-perso">
                    <input type="text" class="input-perso form-control form-control-user @error('libelle') border-danger @enderror"
                           placeholder="Intitulé" value="{{old('libelle',$metier->libelle)}}" name="libelle">
                    @error('libelle')
                    <p class="alert-danger alert-danger-perso p-perso" role="alert">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group col-xl-12 col-perso">
                    <input type="text" class="input-perso form-control form-control-user @error('slug') border-danger @enderror"
                           placeholder="Slug" value="{{old('slug', $metier->slug)}}" name="slug">
                    @error('slug')
                    <p class="alert-danger alert-danger-perso p-perso" role="alert">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group col-xl-12 col-perso">
                    <textarea class="textarea-perso form-control form-control-user @error('description') border-danger @enderror" rows="5" cols="50" name="description" placeholder="Description">{{old('description', $metier->description)}}</textarea>
                    @error('description')
                    <p class="alert-danger alert-danger-perso p-perso" role="alert">{{$message}}</p>
                    @enderror
                </div>
                <div class="col-xl-6 col-perso">
                    <a href="{{route('metiers.index')}}" class="btn btn-info btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-left"></i>
                                        </span>
                        <span class="text">Retour</span>
                    </a>

                    <button class="btn btn-info btn-info-perso" type="submit">Modifier</button>
                </div>
            </form>
        </div>
    </div>
@endsection
