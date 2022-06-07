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
            <h6 class="m-0 font-weight-bold text-primary col-xl-5">Liste des compétences</h6>
            <a href="{{route('competences.create')}}" class="btn btn-info btn-icon-split">
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
                        <th>Intitulé</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($competences as $competence)
                        <tr>
                            <td>{{$competence->id}}</td>
                            <td>{{$competence->intitule}}</td>
                            <td>{{$competence->description}}</td>
                            <td class="td-perso">
                                <div class="inline-perso">
                                    <form class="form-perso" action="{{route('competences.show', $competence->id)}}" method="post">
                                        @method('GET')
                                        @csrf
                                        <button class="btn-perso" type="submit" title="Consulter"><i class='bx bx-zoom-in'></i></button>
                                    </form>

                                    <form class="form-perso" action="{{route('competences.edit', $competence->id)}}" method="post">
                                        @method('GET')
                                        @csrf
                                        <button class="btn-perso" type="submit" title="Modifier"><i class='bx bx-edit-alt'></i></button>
                                    </form>

                                    <a class="dropdown-item dropdown-item-perso" href="#" data-toggle="modal" data-target="#deleteModal">
                                        <i class='bx bx-trash'></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Delete Modal-->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Supprimer</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Cliquez sur "Supprimer" pour continuer la suppression !</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <form class="form-perso" action="{{route('competences.destroy', $competence->id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-info" type="submit" title="Supprimer">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
