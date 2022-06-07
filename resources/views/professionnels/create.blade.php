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
            <form method="post" action="{{route('professionnels.store')}}" enctype="multipart/form-data">
                @method('POST')
                @csrf


                <div class="form-group col-xl-12 col-perso">
                    <select class="custom-select select-perso @error('metier_id') is-invalid @enderror" name="metier_id">
                        <option value="" @if(old('metier_id') =='') selected @endif>
                            Choix du métier
                        </option>
                        @foreach($metiers as $metier)
                            <option value="{{$metier->id}}" @if(old('metier_id') == $metier->id) selected @endif>
                                {{$metier->libelle}}
                            </option>
                        @endforeach
                    </select>
                    @error('metier_id')
                    <p class="alert-danger alert-danger-perso p-perso" role="alert">{{$message}}</p>
                    @enderror
                    <div class="radio-container offset-xl-2">
                        Activité de formation déjà effectuée ?
                        <div class="radio-content custom-radio">
                            <input class="custom-radio" type="radio" value="1" name="formation" @if(old('formation') ==1) checked @endif>
                            <label for="oui">Oui</label>
                            <input class="custom-radio" type="radio" value="0" name="formation"  @if(old('formation') ==0) checked @endif>
                            <label for="non">Non</label>
                        </div>
                    </div>
                </div>

                <div class="form-group col-xl-12 col-perso">
                    <input type="text" class="input-perso form-control form-control-user @error('nom') is-invalid border-danger @enderror"
                           placeholder="Nom" value="{{old('nom')}}" name="nom">
                    @error('nom')
                    <p class="alert-danger alert-danger-perso p-perso" role="alert">{{$message}}</p>
                    @enderror
                    <input type="text" class="input-perso form-control form-control-user @error('prenom') is-invalid border-danger @enderror"
                           placeholder="Prénom" value="{{old('prenom')}}" name="prenom">
                    @error('prenom')
                    <p class="alert-danger alert-danger-perso p-perso" role="alert">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group col-xl-12 col-perso">
                    <input @if(old('naissance') != '') type="date" @else type="text" @endif class="input-perso form-control form-control-user @error('naissance') is-invalid border-danger @enderror"
                           placeholder="Date de naissance" value="{{old('naissance')}}" name="naissance" onfocus="(this.type='date')">
                    @error('naissance')
                    <p class="alert-danger alert-danger-perso p-perso" role="alert">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group col-xl-12 col-perso">
                    <input type="text" class="input-perso form-control form-control-user @error('cp') is-invalid border-danger @enderror"
                           placeholder="Code postal" value="{{old('cp')}}" name="cp">
                    @error('cp')
                    <p class="alert-danger alert-danger-perso p-perso" role="alert">{{$message}}</p>
                    @enderror
                    <input type="text" class="input-perso form-control form-control-user @error('ville') is-invalid border-danger @enderror"
                           placeholder="Ville" value="{{old('ville')}}" name="ville">
                    @error('ville')
                    <p class="alert-danger alert-danger-perso p-perso" role="alert">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group col-xl-12 col-perso">
                    <input type="tel" class="input-perso form-control form-control-user @error('telephone') is-invalid border-danger @enderror"
                           placeholder="Téléphone" value="{{old('telephone')}}" name="telephone">
                    @error('telephone')
                    <p class="alert-danger alert-danger-perso p-perso" role="alert">{{$message}}</p>
                    @enderror
                    <input type="text" class="input-perso form-control form-control-user @error('email') is-invalid border-danger @enderror"
                           placeholder="E-mail" value="{{old('email')}}" name="email">
                    @error('email')
                    <p class="alert-danger alert-danger-perso p-perso" role="alert">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group col-xl-12 col-perso">
                    <div class="checkbox-container" >
                        <span class="span-perso-pro">Domaine(s) :</span>

                        <label for="reseaux">Réseaux</label>
                            <input type="checkbox" id="reseaux" name="domaine[]" value="R" {{(is_array(old('domaine')) && in_array('R', old('domaine'))) ? 'checked' : ''}}>
                        <label for="systemes">Systèmes</label>
                            <input type="checkbox" id="systemes" name="domaine[]" value="S" {{(is_array(old('domaine')) && in_array('S', old('domaine'))) ? 'checked' : ''}}>
                        <label for="developpement">Développement</label>
                            <input type="checkbox" id="developpement" name="domaine[]" value="D" {{(is_array(old('domaine')) && in_array('D', old('domaine'))) ? 'checked' : ''}}>
                    </div>
                    @error('domaine')
                    <p class="alert-danger alert-danger-perso p-perso" role="alert">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group col-xl-12 col-perso">
                    <input type="text" class="input-perso form-control form-control-user @error('source') is-invalid border-danger @enderror"
                           placeholder="Source" value="{{old('source')}}" name="source">
                    @error('source')
                    <p class="alert-danger alert-danger-perso p-perso" role="alert">{{$message}}</p>
                    @enderror
                    <select multiple data-none-selected-text="Compétences" data-live-search="true"  class="selectpicker @error('comp') is-invalid @enderror col-xl-6" name="comp[]">
                        @foreach($competences as $competence)
                            <option value="{{$competence->id}}"
{{--                                {{in_array($competence->id,old('comp') ? old('comp') : []) ? 'selected' : ''}}--}}
                                {{collect(old('comp'))->contains($competence->id) ? 'selected' : ''}}
                            >
                                {{$competence->intitule}}
                            </option>
                        @endforeach
                    </select>
                    @error('comp')
                    <p class="alert-danger alert-danger-perso p-perso" role="alert">{{$message}}</p>
                    @enderror
                </div>


                <div class="form-group col-xl-12 col-perso">
                    <label for="pdf" class="mr-2">CV : (.pdf)</label>
                    <input type="file" name="pdf" accept="application/pdf">
                </div>

                <div class="form-group col-xl-12 col-perso">
                    <textarea class="textarea-perso form-control form-control-user @error('observation') is-invalid border-danger @enderror" rows="5" cols="50" name="observation" placeholder="Observation">{{old('observation')}}</textarea>
                    @error('observation')
                    <p class="alert-danger alert-danger-perso p-perso" role="alert">{{$message}}</p>
                    @enderror
                </div>

                <div class="col-xl-6 col-perso">
                    <a href="{{route('professionnels.index')}}" class="btn btn-info btn-icon-split">
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
