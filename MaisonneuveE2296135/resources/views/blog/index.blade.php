@extends('layout')
@section('title', trans('lang.list_users'))
@section('titleHeader', trans('lang.list_users'))
@section('content')
        <div class="row">
            <div class="col-8">
            </div>
            <div class="col-4 text-end" >
                <p>@lang('lang.add_user')</p>
                <a href="{{ route('blog.ajout')}}"class="btn btn-primary btn-sm">@lang('lang.add_bouton')</a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <div>
                    <div class="container">
                    
                        <ul  class="list-group">
                            @forelse($etudiants as $etudiant)
                                <li  class="list-group-item">{{$etudiant->name}}
                                <div class="text-end">
                                <span><a href="{{ route('blog.show', $etudiant->id)}}"><i class="fa-solid fa-circle-info"></i></a></span>
                                <span><a href="{{ route('blog.edit', $etudiant->id)}}"><i class="fa-solid fa-pen-to-square"></i></a></span>
                                </div>
                            </li>
                            @empty
                                <li  class="list-group-item">Aucun étudiant trouvé</li>
                            @endforelse
                        </ul>

                        </div>
                </div>
            </div>
        </div>
@endsection