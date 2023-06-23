@extends('layout')
@section('title', "Liste des articles")
@section('titleHeader', "Liste des articles")
@section('content')
        <div class="row">
            <div class="col-8">
            </div>
            <div class="col-4 text-end" >
                <p>Ajout d'un article</p>
                <a href="{{ route('blog.ajout-article')}}"class="btn btn-primary btn-sm">@lang('lang.add_bouton')</a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <div>
                    <div class="container">
                    
                        <ul  class="list-group">
                            @php $lang = session('locale') @endphp

                            @forelse($articles as $article)
                            @if($lang == 'fr' AND $article->titre !="")
                                <li  class="list-group-item"><p><strong>{{$article->titre}}</p></strong><p>{{$article->texte}}</p>
                                <div class="text-end">
                                <span><a href="{{ route('blog.show-article', $article->id)}}"><i class="fa-solid fa-circle-info"></i></a></span>
                                @if ($article->user_id == Auth::user()->id)
                                <span><a href="{{ route('blog.edit-article', $article->id)}}"><i class="fa-solid fa-pen-to-square"></i></a></span>
                                @endif
                                </div>
                            </li>
                            @elseif($lang == 'en'AND $article->title !="")
                            <li  class="list-group-item"><strong>{{$article->title}}</p></strong><p>{{$article->text}}</p>
                            <div class="text-end">
                                <span><a href="{{ route('blog.show-article', $article->id)}}"><i class="fa-solid fa-circle-info"></i></a></span>
                                @if ($article->user_id == Auth::user()->id)
                                <span><a href="{{ route('blog.edit-article', $article->id)}}"><i class="fa-solid fa-pen-to-square"></i></a></span>
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