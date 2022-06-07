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
    @if(session('error'))
        <div class="alert-danger-perso is-invalid mb-4 alert-danger">
            {{session('error')}}
        </div>
    @endif
    <div class="parent mb-3">
        <div class="div1"> Liste des compétences V2 </div>
        <div class="div2"> Recherche intitulé :
            <form
                class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
                action="{{route('competences.search')}}" method="POST">
                @method('GET')
                @csrf
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small input-search-perso" placeholder="Recherche..."
                           aria-label="Search" aria-describedby="basic-addon2" name="search" @if(isset($search)) value="{{$search}}" @endif>
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form></div>
    </div>
    <div class="row mb-2">
        <table class="table table-bordered" width="100%" cellspacing="0">
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
        <div class="pagination justify-content-center pagination-perso">
            {{$competences->links()}}
        </div>
    </div>

@endsection
