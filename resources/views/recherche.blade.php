@extends('layouts.app')
@section('content')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <body>
    <div id="main-content-home">
        <div class="welcome-home">
            <h1 class="main-title-home">Résultats pour <span>{{ $recherche }}</span> :
            </h1>
        </div>
        <div id="content-home" class="search-main">
            <div class="flex-search">
                <h3 class="search-title">Utilisateurs</h3>
                <ul>
                    <div class="chanson-folder">
                    @foreach($utilisateurs as $u)
                        <div class="result-user"><a class="username" href="/user/{{$u -> id}}">{{$u -> name}}</a> <p>({{$u->ilsMeSuivent()->count()}} abonnés | {{$u->jeLesSuis()->count()}} abonnements)</p></div>
                    @endforeach
                    </div>
                </ul>
            </div>
            <div class="flex-search chanson-search">
                <h3 class="search-title">Chansons </h3>
                @include('_chansons',['chansons' => $chansons])</div>
            <div class="flex-search">
                <h3 class="search-title">Playlists</h3>
            </div>
        </div>
    </div>
    </body>
@endsection