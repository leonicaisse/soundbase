@extends('layouts.app')
@section('content')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <body>
    <div id="main-content-home">
        <div class="welcome-home">
            <h1 class="main-title-home">Résultats pour <span>{{ $recherche }}</span> :
            </h1>
        </div>
        <div id="content-home">
            <h3>Utilisateurs :</h3>
            <ul>
                @foreach($utilisateurs as $u)
                    <li><a href="/user/{{$u -> id}}">{{$u -> name}}</a> ({{$u->ilsMeSuivent()->count()}} abonnés | {{$u->jeLesSuis()->count()}} abonnements)</li>
                @endforeach
            </ul>
            <br/>
            <h3>Chansons :</h3>
            @include('_chansons',['chansons' => $chansons])
        </div>
    </div>
    </body>
@endsection