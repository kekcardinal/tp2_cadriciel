@extends('layout')
@section('title', 'Modifier un étudiant')
@section('titleHeader', 'Modifier un étudiant')
@section('content')
<div class="row mt-4 justify-content-center">
    <div class="col-6">
        
       
            <form method="post">
                @csrf
                @method('put')

                <div class="col d-flex justify-content-center">
<div class="card" style="width: 18rem;">
  <div class="card-body">
  <label for="titre">Titre</label>
                    <input type="text" id="titre" name="titre" class="form-control" value="{{$blogArticle->titre}}">
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" class="form-control" value="{{$blogArticle->title}}">
                    <label for="nom">Texte</label>
                    <input type="text" id="texte" name="texte" class="form-control" value="{{$blogArticle->texte}}">
                    <label for="nom">Text</label>
                    <input type="text" id="text" name="text" class="form-control" value="{{$blogArticle->text}}">
  </div>
</div>
</div>
<br>
<div class="card-footer text-center">
                    <input type="submit" class="btn btn-success" value="Modifier">
                </div>
            </form>
    </div>
</div>
@endsection