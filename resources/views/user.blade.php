@extends('layouts.app')

@section('content')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <body>
    <div id="main-content-home">
        <div class="welcome-home  profile-home">
            <div class="flex-profile">
                <img src="{{asset('images/cover.jpg')}} " class="user-profil-avatar">
                <svg height="0" width="0">
                    <defs>
                        <clipPath id="svgPath">
                            <path fill="#FFFFFF" stroke="#000000" stroke-width="1.5794" stroke-miterlimit="10" d="M23.5,17.7C55.4-4,152.4,47.6,148.6,80.3C144.9,113,61.3,148.9,25.3,134C-4.4,121.8-8.4,39.4,23.5,17.7z"/>
                        </clipPath>
                    </defs>
                </svg>

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