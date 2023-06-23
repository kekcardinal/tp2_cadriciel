@extends('layout')
@section('title', 'Modifier un document')
@section('titleHeader', 'Modifier un document')
@section('content')
<div class="row mt-4 justify-content-center">
    <div class="col-6">
            <form enctype="multipart/form-data" method="post">
                @csrf
                @method('put')

                <div class="col d-flex justify-content-center">
<div class="card" style="width: 18rem;">
  <div class="card-body">
  <label for="titre">Titre en francais</label>
                    <input type="text" id="titre" name="titre" class="form-control" value="{{$Document->titre}}">
                    <label for="title">Title in english</label>
                    <input type="text" id="title" name="title" class="form-control" value="{{$Document->title}}">
                    <label> Fichier : </label>
                    <input name="fichier" type="file">
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