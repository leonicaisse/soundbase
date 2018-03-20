@extends('layouts.app')

@section('content')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <body>
    <div id="main-content-home">
        <div class="welcome-home">
            <h1 class="main-title-home"><span>{{$utilisateur->name }}</span></h1>
            Abonnés : {{$utilisateur->ilsMeSuivent()->count()}}| Abonnements : {{$utilisateur->jeLesSuis()->count()}}
            <br/>
            @auth
                @if($utilisateur->id != \Illuminate\Support\Facades\Auth::id())
                    @if(Auth::user()->jeLesSuis->contains($utilisateur->id))
                        <a href="/suivre/{{$utilisateur->id}}">Suivi</a>
                    @else
                        <a href="/suivre/{{$utilisateur->id}}">Suivre</a>
                    @endif
                @endif
            @endauth
        </div>
        <div id="content-home">
            @include('_chansons', ['chansons' => $utilisateur -> chansons])
        </div>
    </div>
    </body>
@endsection