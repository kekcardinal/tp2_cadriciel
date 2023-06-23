@extends('layout')
@section('title', "Information sur l'article")
@section('titleHeader', "Information sur l'article")
@section('content')


<div class="col d-flex justify-content-center">
<div class="card" style="width: 18rem;">
  <div class="card-body">
  <ul  class="list-group">
    <li class="list-group-item"><h5 class="card-title">Auteur/Author <p>{{ $blogArticle->blogHasUser->name }}</p></h5></li>
    <li class="list-group-item">
    <h5 class="card-title">{{$blogArticle->titre}}</h5>
    <h5 class="card-title">{{$blogArticle->texte}}</h5>
    </li>
    <li class="list-group-item">
    <h5 class="card-title">{{$blogArticle->title}}</h5>
    <h5 class="card-title">{{$blogArticle->text}}</h5>
    </li>

    
</ul>
  </div>
  </ul>
</div>
</div>
<br>
<div class="col d-flex justify-content-center">
@if ($blogArticle->user_id == Auth::user()->id)
<li class="list-group-item"><i  data-bs-toggle="modal" data-bs-target="#exampleModal" class="fa-solid fa-trash"></i></li>
@endif
<a href="{{route('blog.article')}}" class="btn btn-outline-primary btn-sm">Retourner</a>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Effacer</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Voulez-vous supprimer : {{$blogArticle->titre}} ?
                Contenu de l'article : {{$blogArticle->texte}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <form method=post>
                    @csrf
                    @method('delete')
                    <input type="submit" value="Effacer" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
</div>

@endsection