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

    <div class="row mb-2">
        Liste des professionnels v2

        <div class="col-xl-6">
            <select onchange="location.href=this.value" name="filtre" id="filtre">
                <option value="{{route('professionnels.v2')}}" @unless($slug) selected @endunless>
                    Tous les métiers
                </option>

                @foreach($metiers as $metier)
                    <option value="{{route('professionnels.metier2',['slug' => $metier->slug])}}"
                        {{$slug == $metier->slug ? 'selected' : ''}}>
                        {{$metier->libelle}}
                    </option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="row mb-2">
        <table class="table table-bordered" width="100%" cellspacing="0">
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
        <div class="pagination justify-content-center pagination-perso">
                {{$professionnels->links()}}
        </div>
    </div>

@endsection
