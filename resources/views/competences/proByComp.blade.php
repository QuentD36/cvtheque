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
                <h6 class="m-0 font-weight-bold text-primary col-xl-5">Resultat de la recherche</h6>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
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


                    @foreach($professionnels as $professionnel)
                        @foreach($professionnel as $pro)
                            <tr>
                                <td>{{$pro->id}}</td>
                                <td>{{$pro->prenom}} {{$pro->nom}}</td>
                                <td>{{$pro->metier->libelle}}</td>
                                <td>{{$pro->cp}} - {{$pro->ville}}</td>
                                <td>
                                    @if($pro->formation == 1)
                                        Oui
                                    @else
                                        Non
                                    @endif
                                </td>
                                <td class="td-perso">
                                    <div class="inline-perso">
                                        <form class="form-perso" action="{{route('professionnels.show', $pro->id)}}" method="post">
                                            @method('GET')
                                            @csrf
                                            <button class="btn-perso" type="submit" title="Consulter"><i class='bx bx-zoom-in'></i></button>
                                        </form>

                                        <form class="form-perso" action="{{route('professionnels.edit', $pro->id)}}" method="post">
                                            @method('GET')
                                            @csrf
                                            <button class="btn-perso" type="submit" title="Modifier"><i class='bx bx-edit-alt'></i></button>
                                        </form>

                                        <form class="form-perso" action="{{route('professionnels.destroy', $pro->id)}}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn-perso" type="submit" title="Supprimer"><i class='bx bx-trash'></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            </tr>
                        @endforeach
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection




