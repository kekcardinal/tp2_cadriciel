@extends('layout')
@section('title', "Liste des documents")
@section('titleHeader', "Liste des documents")
@section('content')
        <div class="row">
            <div class="col-8">
            </div>
            <div class="col-4 text-end" >
                <p>Ajout d'un document</p>
                <a href="{{ route('document.ajout')}}"class="btn btn-primary btn-sm">@lang('lang.add_bouton')</a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <div>
                    <div class="container">
                    
                        <ul  class="list-group">
                            @php $lang = session('locale') @endphp

                            @forelse($documents as $document)
                            @if($lang == 'fr' AND $document->titre !="")
                                <li  class="list-group-item"><p>{{$document->titre}}</p><p>
                                <div class="text-end">
                                <span><a href="{{ route('document.show', $document->id)}}"><i class="fa-solid fa-circle-info"></i></a></span>
                                @if ($document->user_id == Auth::user()->id)
                                <span><a href="{{ route('document.edit', $document->id)}}"><i class="fa-solid fa-pen-to-square"></i></a></span>
                                @endif
                                </div>
                            </li>
                            @elseif($lang == 'en'AND $document->title !="")
                            <li  class="list-group-item"><p>{{$document->title}}</p>
                            <div class="text-end">
                                <span><a href="{{ route('document.show', $document->id)}}"><i class="fa-solid fa-circle-info"></i></a></span>
                                @if ($document->user_id == Auth::user()->id)
                                <span><a href="{{ route('document.edit', $document->id)}}"><i class="fa-solid fa-pen-to-square"></i></a></span>
                                @endif
                                </div>
                            </li>
                            @endif
                            
                            @empty
                                <li  class="list-group-item">Aucun articles trouvé</li>
                            @endforelse
                        </ul>

                        </div>
                </div>
            </div>
        </div>
@endsection