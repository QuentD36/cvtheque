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
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <form method="post" action="{{route('competences.store')}}">
                @method('POST')
                @csrf

                <div class="form-group col-xl-12 col-perso">
                    <input type="text" class="input-perso form-control form-control-user @error('intitule') border-danger @enderror"
                           placeholder="Intitulé" value="{{old('intitule')}}" name="intitule">
                    @error('intitule')
                    <p class="alert-danger alert-danger-perso p-perso" role="alert">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group col-xl-12 col-perso">
                <textarea class="textarea-perso form-control form-control-user @error('description') border-danger @enderror" rows="5" cols="50" name="description" placeholder="Description">{{old('description')}}</textarea>
                    @error('description')
                    <p class="alert-danger alert-danger-perso p-perso" role="alert">{{$message}}</p>
                    @enderror
                </div>
                <div class="col-xl-6 col-perso">
                    <a href="{{route('competences.index')}}" class="btn btn-info btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-left"></i>
                                        </span>
                        <span class="text">Retour</span>
                    </a>

                    <button class="btn btn-info btn-info-perso" type="submit">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
@endsection
