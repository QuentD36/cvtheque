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
            <h6 class="m-0 font-weight-bold text-primary col-xl-5">Liste des métiers</h6>
            <a href="{{route('metiers.create')}}" class="btn btn-info btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class='bx bx-plus-circle bx-perso'></i>
                                        </span>
                <span class="text">Ajouter</span>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Libellé</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($metiers as $metier)
                        <tr>
                            <td>{{$metier->id}}</td>
                            <td>{{$metier->libelle}}</td>
                            <td>{{$metier->description}}</td>
                            <td class="td-perso">
                                <div class="inline-perso">
                                    <form class="form-perso" action="{{route('metiers.show', $metier->id)}}" method="post">
                                        @method('GET')
                                        @csrf
                                        <button class="btn-perso" type="submit" title="Consulter"><i class='bx bx-zoom-in'></i></button>
                                    </form>

                                    <form class="form-perso" action="{{route('metiers.edit', $metier->id)}}" method="post">
                                        @method('GET')
                                        @csrf
                                        <button class="btn-perso" type="submit" title="Modifier"><i class='bx bx-edit-alt'></i></button>
                                    </form>

                                    <form class="form-perso" action="{{route('metiers.delete', $metier->id)}}" method="post">
                                        @method('GET')
                                        @csrf
                                        <button class="btn-perso" type="submit" title="Supprimer"><i class='bx bx-trash'></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
