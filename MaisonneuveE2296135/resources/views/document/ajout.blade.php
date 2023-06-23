@extends('layout')
@section('title', 'Importer un document')
@section('titleHeader', 'Importer un document')
@section('content')
<div class="row mt-4 justify-content-center">
    <div class="col-6">
        <div class="card">
            <form enctype="multipart/form-data" method="post">
                @csrf
                <div class="card-header">
                    Formulaire
                </div>
                    <div class="card-body">
                    <label for="titre">Titre</label>
                    <input type="text" id="titre" name="titre" class="form-control"><br>
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" class="form-control"><br>
                    <br>

                    <label> Importer : </label>
                    <input name="fichier" type="file">
                </div>
                <div class="card-footer text-center">
                    <input type="submit" class="btn btn-success" value="Save">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection