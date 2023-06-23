<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
      
    />

    <!--CDN mdbootstrap-->
    <link href=
"https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel=
"stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
  @php $lang = session('locale') @endphp
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li>
    <a class="navbar-brand" href="#">@lang('lang.bonjour') {{Auth::user() ? Auth::user()->name : 'Visiteur'}}</a></li><li>
                    <a class="nav-link" href="{{route('blog.index')}}">@lang('lang.accueil')</a></li>

                    @guest
                    <li>
                    <a class="nav-link" href="{{route('user.registration')}}">@lang('lang.register_user')</a></li><li>
                    <a class="nav-link" href="{{route('login')}}">@lang('lang.connexion')</a></li>
                    @else
                    <li>
                    <a class="nav-link" href="{{route('blog.article')}}">Articles</a>
                    </li>
                    <li>
                    <a class="nav-link" href="{{route('logout')}}">@lang('lang.logout')</a>
                    </li>
                    <li>
                    <a class="nav-link" href="{{route('document.index')}}">Document</a>
                    </li>
                    @endguest

                    <li>
                    <a class="nav-link @if($lang == 'fr') text-info @endif" href="{{route('lang', 'fr')}}">Francais <i class='flag flag-france'></i></a>
                    </li>
                    <li>
                    <a class="nav-link @if($lang == 'en') text-info @endif" href="{{route('lang', 'en')}}">English <i class='flag flag-united-states'></i></a>
                    </li>
    </ul>
  </div>
</nav>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-6 mt-5">
                    @yield('titleHeader')
                </h1>
                <br>
            </div>
        </div>
        @yield('content')
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script
    src="https://kit.fontawesome.com/0dd66940ac.js"
    crossorigin="anonymous"
  ></script>

</html>