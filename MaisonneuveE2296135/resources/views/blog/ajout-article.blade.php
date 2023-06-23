@extends('layout')
@section('title', 'Veuillez ajouter un article')
@section('titleHeader', 'Veuillez ajouter un article')
@section('content')
<div class="row mt-4 justify-content-center">
    <div class="col-6">
        <div class="card">
            <form method="post">
                @csrf
                <div class="card-header">
                    Formulaire d'ajout d'article
                </div>
                    <div class="card-body">
                    <label for="titre">Titre en francais</label>
                    <input type="text" id="titre" name="titre" class="form-control"><br>
                    <label for="title">Title in english</label>
                    <input type="text" id="title" name="title" class="form-control"><br>
                    <label for="text">Text in english</label>
                    <input type="text" id="text" name="text" class="form-control"><br>
                    <label for="text">Texte en francais</label>
                    <input type="text" id="texte" name="texte" class="form-control"><br>
                </div>
                <div class="card-footer text-center">
                    <input type="submit" class="btn btn-success" value="Save">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection