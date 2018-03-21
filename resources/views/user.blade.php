@extends('layouts.app')

@section('content')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <body>
    <div id="main-content-home">
        <div class="welcome-home  profile-home">
            <div class="flex-profile">
                <img src="{{asset('images/visage.jpg')}} " class="user-profil-avatar">
            </div>
            <div class="flex-profile profil-div-right">
                <h1 class="main-title-home profile-title"><span>{{$utilisateur->name }}</span></h1>
                <div class="profile-follow">

                <div>
                @auth
                    @if($utilisateur->id != \Illuminate\Support\Facades\Auth::id())
                        @if(Auth::user()->jeLesSuis->contains($utilisateur->id))
                            <a  class="follow" href="/suivre/{{$utilisateur->id}}">Suivi</a>
                        @else
                            <a  class="follow" href="/suivre/{{$utilisateur->id}}">Suivre</a>
                        @endif
                    @endif
                @endauth
                </div>
                    <br/>
                    <div id="left-border-profile">
                    <h4 class="blue-title reduce-line"> Abonnés</h4>
                    <span style="font-weight: bold;">{{$utilisateur->ilsMeSuivent()->count()}}</span>
                    </div>
                    <div id="right-border-profile">
                    <h4 class="blue-title reduce-line">Abonnements</h4>
                    <span  style="font-weight: bold;"> {{$utilisateur->jeLesSuis()->count()}}</span>
                    </div>
                </div>
            </div>
        </div>
        <div id="content-home">
            <h2 class="home-title">Ses chansons</h2>
            @include('_chansons', ['chansons' => $utilisateur -> chansons])
        </div>
    </div>
    </body>
@endsection