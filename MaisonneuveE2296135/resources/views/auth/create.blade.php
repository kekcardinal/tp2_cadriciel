@extends('layout')
@section('title', 'Ajouter un étudiant')
@section('titleHeader', trans('lang.register_user'))
@section('content')
<main class="login-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 pt-4">
                <div class="card">
                    
                        <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">
                            {{session('success')}}
                            </div>
                        @endif
                        <form action="{{route('user.store')}}" method="post">
                        @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="@lang('lang.name')" class="form-control" name="name" value="{{old('name')}}">
                                @if ($errors->has('name'))
                                <div class="text-danger mt-2">
                                    {{$errors->first('name')}}
                                </div>
                                @endif
                            </div>
                            
                            <input name="adresse" id="adresse" class="form-control" placeholder="@lang('lang.address')" value="{{ old('adresse') }}"><br>
                            <label for="ville">@lang('lang.city')</label>
                            <select name="id" id="ville" class="">
                                @foreach($ville as $villes)
                                <option value="{{$villes->id}}">{{$villes->nom}}</option>
                                @endforeach
                            </select><br><br>
                            <div class="form-group mb-3">
                                <input type="email" placeholder="@lang('lang.email')" class="form-control" name="email" value="{{old('email')}}">
                                @if ($errors->has('email'))
                                <div class="text-danger mt-2">
                                    {{$errors->first('email')}}
                                </div>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="@lang('lang.password')" class="form-control" name="password">
                                @if ($errors->has('password'))
                                    <div class="text-danger mt-2">
                                        {{$errors->first('password')}}
                                    </div>
                                @endif
                                <input type= "password" id= "password_confirmation" required name= "password_confirmation" max_length= "20"   min_length="6"   class="form-control" ><br>
            @if($errors->has("mot_de_passe_confirmation" ))
            <p>{{ $errors->first("mot_de_passe_confirmation" ) }}</p>
           @endif

                            </div>
                            <div>
                            <label for="phone">Téléphone</label>
                    <input type="text" id="phone" name="phone" class="form-control" value="{{ old('phone') }}">
                    <br>
                    <label for="date_de_naissance">Date de naissance</label>
                    <input type="text" id="date_de_naissance" name="date_de_naissance" value="{{ old('date_de_naissance') }}" class="form-control">
                    @if($errors->has('date_de_naissance'))
                    <p>{{ $errors->first('date_de_naissance') }}</p>
                    @endif
</div><br><br>
                            <div class="d-grid mx-auto">
                                <input type="submit" value="@lang('lang.sign_up')" class="btn btn-dark btn-block">
                            </div>
                        </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection