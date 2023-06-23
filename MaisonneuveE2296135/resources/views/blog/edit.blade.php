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
  <img class="card-img-top" src="https://www.w3schools.com/bootstrap4/img_avatar3.png" alt="Card image cap">
  <div class="card-body">
  <label for="nom">Nom</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{$etudiant->name}}">
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><label for="adresse">Adresse</label>
                    <input type="text" id="adresse" name="adresse" class="form-control" value="{{$etudiant->adresse}}"></li>
    <li class="list-group-item"><label for="ville">Ville</label>
                    <select name="id" id="ville" class="">
                        @foreach($villes as $ville)
                        @if($etudiant->ville_id == $ville->id)
                        <option selected value="{{$ville->id}}">{{$ville->nom}}</option>
                        @else
                        <option value="{{$ville->id}}">{{$ville->nom}}</option>
                        @endif
                        @endforeach
                    </select></li>
    <li class="list-group-item"><label for="email">Email</label>
                    <input type="courriel" id="email" name="email" class="form-control" value="{{$etudiant->email}}"></li>
    <li class="list-group-item"><label for="phone">Téléphone</label>
                    <input type="text" id="phone" name="phone" class="form-control" value="{{$etudiant->phone}}"></li>
    <li class="list-group-item"><label for="date_de_naissance">Date de naissance</label>
                    <input type="text" id="date_de_naissance" name="date_de_naissance" class="form-control" value="{{$etudiant->date_de_naissance}}"></li>
  </ul>
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