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
        <div class="card-header py-3 card-header-perso">
            <div class="col-xl-6 col-perso">
                <h6 class="m-0 font-weight-bold text-primary col-xl-5">Liste des professionnels</h6>
                <a href="{{route('professionnels.create')}}" class="btn btn-info btn-icon-split btn-align-perso">
                                        <span class="icon text-white-50">
                                            <i class='bx bx-plus-circle bx-perso'></i>
                                        </span>
                    <span class="text">Ajouter</span>
                </a>
            </div>
            <div class="col-xl-6">
                <div class="filter-perso">
                    <select onchange="location.href=this.value" name="filtre" id="filtre">
                            <option value="{{route('professionnels.index')}}" @unless($slug) selected @endunless>
                                Tous les métiers
                            </option>

                        @foreach($metiers as $metier)
                            <option value="{{route('professionnels.metier',['slug' => $metier->slug])}}"
                                {{$slug == $metier->slug ? 'selected' : ''}}>
                                {{$metier->libelle}}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Prénom Nom</th>
                        <th>Métiers</th>
                        <th>Code postal - Ville</th>
                        <th>Formation</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    @forelse($professionnels as $professionnel)
                        <tr>
                            <td>{{$professionnel->id}}</td>
                            <td>{{$professionnel->prenom}} {{$professionnel->nom}}</td>
                            <td>{{$professionnel->metier->libelle}}</td>
                            <td>{{$professionnel->cp}} - {{$professionnel->ville}}</td>
                            <td>
                                @if($professionnel->formation == 1)
                                    Oui
                                @else
                                    Non
                                @endif
                            </td>
                            <td class="td-perso">
                                <div class="inline-perso">
                                    <form class="form-perso" action="{{route('professionnels.show', $professionnel->id)}}" method="post">
                                        @method('GET')
                                        @csrf
                                        <button class="btn-perso" type="submit" title="Consulter"><i class='bx bx-zoom-in'></i></button>
                                    </form>

                                    <form class="form-perso" action="{{route('professionnels.edit', $professionnel->id)}}" method="post">
                                        @method('GET')
                                        @csrf
                                        <button class="btn-perso" type="submit" title="Modifier"><i class='bx bx-edit-alt'></i></button>
                                    </form>

                                    <form class="form-perso" action="{{route('professionnels.destroy', $professionnel->id)}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn-perso" type="submit" title="Supprimer"><i class='bx bx-trash'></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td>
                                    Il n'y a pas de professionnel correspondant à votre demande !
                                </td>
                            </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
