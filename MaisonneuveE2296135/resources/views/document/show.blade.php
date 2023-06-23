@extends('layout')
@section('title', "Information sur le document")
@section('titleHeader', "Information sur le document")
@section('content')

@php $lang = session('locale') @endphp
<div class="col d-flex justify-content-center">
<div class="card" style="width: 18rem;">
  <div class="card-body">
  <ul  class="list-group">
    <li class="list-group-item"><h5 class="card-title">Auteur/Author <p>{{ $Document->documentHasUser->name }}</p></h5></li>
    
    @if($lang == 'fr' AND $Document->titre !="")
    <li class="list-group-item">
    <h5 class="card-title">{{$Document->titre}}</h5>
    </li>
    
    @elseif($lang == 'en' AND $Document->title !="")
    <li class="list-group-item">
    <h5 class="card-title">{{$Document->title}}</h5>
    </li>
    @endif

    <li class="list-group-item">
    <h5 class="card-title">{{$Document->nom_document}}</h5>
    </li>
    
</ul>
  </div>
  </ul>
</div>
</div>
<br>
<div class="col d-flex justify-content-center">
@if ($Document->user_id == Auth::user()->id)
<li class="list-group-item"><i  data-bs-toggle="modal" data-bs-target="#exampleModal" class="fa-solid fa-trash"></i></li>
@endif
<a href="{{route('document.index')}}" class="btn btn-outline-primary btn-sm">Retourner</a>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Effacer</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Voulez-vous supprimer : {{$Document->titre}} ?
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