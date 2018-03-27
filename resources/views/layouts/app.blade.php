<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SoundBase') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{asset('css/jquery.fancybox.min.css')}}" rel="stylesheet"/>
</head>

<body>
@guest
    <header id="header" role="banner" class="main-header">
        @else
            <header id="header" role="banner" class="user-header">
                @endguest
                @guest
                    <div class="header-inner">
                        <div class="header-logo">
                            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}"
                                                                               alt="SoundBase"
                                                                               width="50px" height="auto"></a>
                        </div>
                        <a href="{{ url('/') }}" class="home"><h1 class="site-title">Soun<span>dB</span>ase</h1></a>
                        @else
                            <div class="header-inner-home">
                                <div class="header-logo-home">
                                    <a href="{{ url('/home') }}"><img src="{{ asset('images/logo.png') }}"
                                                                      alt="SoundBase" width="auto"
                                                                      height="20px">
                                        <h1 class="site-title-home">Soun<span>dB</span>ase</h1></a>
                                </div>
                                @endguest
                                <div class="collapse navbar-collapse" id="app-navbar-collapse">

                                    @guest
                                        <nav class="header-nav">
                                            <ul>
                                                <li class="first-menu">
                                                    <a class="connexion" href="{{ route('login') }}">Connexion</a>
                                                </li>
                                                <li>
                                                    <a class="inscription"
                                                       href="{{ route('register') }}">Inscription</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    @else
                                        <div class="user-account">
                                            <a href="/user/{{Auth::user()->id}}">
                                                <img src="{{ asset('images/face.png') }}" class="user-avatar">
                                                <h3 class="user-name"> {{ Auth::user()->name }}</h3>
                                            </a>
                                        </div>
                                        <div class="nav-menu">
                                            <ul>
                                                <li>
                                                    <form id="search" class="search">
                                                        <input type="text" id="input-src" class="input-src" placeholder="Rechercher des bails" required>
                                                        <button type="submit" id="btn-src" class="btn-src"></button>
                                                    </form>
                                                </li>
                                                <li>

                                                    <a href="{{ url('/home') }}" class="link-menu-home"
                                                       id="link-to-home">Accueil</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="link-menu-home" id="link-to-music">Mes
                                                        musiques</a>
                                                </li>
                                                <li>
                                                    <a href="/upload_song" class="link-menu-home" id="link-to-music">Ajouter
                                                        une musique</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="link-menu-home" id="link-to-playlist">Mes
                                                        playlists</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="link-menu-home"
                                                       id="link-to-follow">Abonnements</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="link-menu-home"
                                                       id="link-to-notif">Notifications</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('logout') }}"
                                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                                       class="link-menu-home" id="link-to-exit">Déconnexion</a>
                                                </li>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                      style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </ul>
                                        </div>
                                    @endguest
                                </div>
                            </div>
                    </div>
            </header>
            @auth
                <div id="player-container" class="main-player-home player">
                    <div id="song-playing" class="song-playing">
                        <img src="{{ asset('images/no-song.jpg') }}" class='chanson-pochette' width="75px"/>
                        <h1
                                class='chanson-titre'>SoundBase</h1>
                    </div>
                    <div class="player">
                        <audio id="audio-player" class="audio-player" controls src="" hidden></audio>
                        <button id="btn-prev" class="btn-prev"></button>
                        <button id="btn-plps" class="btn-plps"></button>
                        <button id="btn-next" class="btn-next"></button>
                        <div class="progressbar">
                            <p id="current-time" class="current-time"></p>
                            <input id="time-prog" type="range" min="0" max="2000" value="0" class="slider time-prog"/>
                            <p id="duration" class="duration"></p>
                        </div>
                        <button id="btn-mute" class="btn-mute"></button>
                        <div class="progressbar">
                            <input id="slider-vol" type="range" min="0" max="100" value="80" class="slider slider-vol"/>
                        </div>
                    </div>
                </div>
        @endauth

        @yield('content')

        <!-- Scripts -->
            <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
            <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
            <script src="{{ asset('js/app.js') }}"></script>


</body>

</html>
