@extends('layout')
@section('title', "Information sur l'etudiant")
@section('titleHeader', "Information sur l'etudiant")
@section('content')


<div class="col d-flex justify-content-center">
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="https://www.w3schools.com/bootstrap4/img_avatar3.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$etudiant->name}}</h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Adresse : {{$etudiant->adresse }}</li>
    <li class="list-group-item">Ville :
            @if(isset($etudiant->siteHasVille))
            {{$etudiant->siteHasVille->nom}}
            @endif</li>
    <li class="list-group-item"><a href="mailto:{{$etudiant->email }}"> Adresse courriel : {{$etudiant->email }} </a></li>
    <li class="list-group-item">Date de naissance : {{$etudiant->date_de_naissance }}</li>
    <li class="list-group-item">Numero de téléphone : {{$etudiant->phone }}</li>
    <li class="list-group-item"><i  data-bs-toggle="modal" data-bs-target="#exampleModal" class="fa-solid fa-trash"></i></li>
  </ul>
</div>
</div>
<br>
<div class="col d-flex justify-content-center">
<a href="{{route('blog.index')}}" class="btn btn-outline-primary btn-sm">Retourner</a>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Effacer</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Voulez-vous supprimer : {{$etudiant->name}} ?
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