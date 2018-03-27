@extends('layouts.app')

@section('content')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <body>
    <div id="main-content-home">
        <div class="welcome-home  profile-home">
            <div class="flex-profile">
                @auth
                    @if($utilisateur->avatar == NULL)
                        <img src="{{asset('images/avatars/default.jpg')}} " class="user-profil-avatar">
                    @else
                        <img src="{{asset('images/avatars/test.jpg')}} " class="user-profil-avatar">
                    @endif
                @endauth
                <svg height="0" width="0">
                    <defs>
                        <clipPath id="svgPath">
                            <path class="st0" d="M23.8,18.2c7.7-4.8,16.9-6.3,26.4-5.5C67.4,14.2,84,20.1,99.1,28c14.4,7.6,29.5,16.9,40.1,29.5
	c4.9,5.8,8.6,13,8.6,20.6c0.1,8.4-4.2,16.4-10.1,22.5c-8.4,8.8-20,15.4-30.8,20.8c-12.9,6.4-26.5,11.5-40.7,14.2
	c-13.4,2.5-29.4,4.2-41.8-2.4C13.1,127,7.7,115.8,4.7,103.8c-4-15.9-4.5-32.6-1.5-48.7c2-10.8,5.6-21.9,13-30.3
	C18.5,22.1,21,20,23.8,18.2z"/>
                        </clipPath>
                    </defs>
                </svg>

            </div>
            <div class="flex-profile profil-div-right">
                <h1 class="main-title-home profile-title"><span>{{$utilisateur->name }}</span>
                    @auth
                        @if($utilisateur->id == \Illuminate\Support\Facades\Auth::id())
                            <a href="settings" data-fancybox data-src="#settings" href="javascript:"><img
                                        src="{{asset('images/settings.svg')}}" width="15px"></a>
                            <div style="display: none;" id="settings" class="enigme">
                                <form>
                                    <label for="username">Nom d'utilisateur</label>
                                    <input type="text" placeholder="Nom d'utilisateur" name="username">
                                    <button type="submit">enregistrer les modifications</button>
                                </form>
                            </div>
                        @endif
                    @endauth
                </h1>
                <div class="profile-follow">

                    <div>
                        @auth
                            @if($utilisateur->id != \Illuminate\Support\Facades\Auth::id())
                                @if(Auth::user()->jeLesSuis->contains($utilisateur->id))
                                    <a class="follow" href="/suivre/{{$utilisateur->id}}">Suivi</a>
                                @else
                                    <a class="follow" href="/suivre/{{$utilisateur->id}}">Suivre</a>
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
                        <span style="font-weight: bold;"> {{$utilisateur->jeLesSuis()->count()}}</span>
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