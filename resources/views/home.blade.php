@extends('layouts.app')

@section('content')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <body>
    <div id="main-content-home">
        <div class="welcome-home">
            <h1 class="main-title-home">Salut <span>{{ Auth::user()->name }}</span> !
            </h1>
        </div>
        <div id="content-home">
            <h2 class="home-title">Toutes</h2>
            @include('_chansons', ['chansons' => $lastAll, 'genre' => 'all'])
            <br/>
            <h2 class="home-title">Nouveautés Rock</h2>
            {{--@include('_chansons', ['chansons' => $lastAll, 'genre' => 'rock'])--}}
            <br/>
            <h2 class="home-title">Nouveautés Rap</h2>
            {{--@include('_chansons', ['chansons' => $lastAll, 'genre' => 'rap'])--}}
            <br/>
        </div>
    </div>
    </body>
@endsection