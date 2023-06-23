@extends('layout')
@section('title', 'Veuillez ajouter un étudiant')
@section('titleHeader', 'Veuillez ajouter un étudiant')
@section('content')
<div class="row mt-4 justify-content-center">
    <div class="col-6">
        <div class="card">
            <form method="post">
                @csrf
                <div class="card-header">
                    Formulaire
                </div>
                    <div class="card-body">
                    <label for="name">Nom</label>
                    <input type="text" id="name" name="name" class="form-control"><br>
                    <label for="adresse">Adresse</label>
                    <input name="adresse" id="adresse" class="form-control"><br>
                    <label for="ville">Ville</label>
                    <select name="id" id="ville" class="">
                        @foreach($ville as $villes)
                        <option value="{{$villes->id}}">{{$villes->nom}}</option>
                        @endforeach
                    </select><br><br>
                    <label for="email">Courriel</label>
                    <input type="courriel" id="email" name="email" class="form-control"><br>
                    <label for="phone">Téléphone</label>
                    <input type="text" id="phone" name="phone" class="form-control">
                    <br>
                    <label for="date_de_naissance">Date de naissance</label>
                    <input type="text" id="date_de_naissance" name="date_de_naissance" class="form-control">
                </div>
                <div class="card-footer text-center">
                    <input type="submit" class="btn btn-success" value="Save">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection