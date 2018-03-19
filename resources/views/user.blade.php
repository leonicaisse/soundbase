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

            <ul>
                <h2 class="home-title">Populaires</h2>
                <div id="chansons" class="chanson-folder"></div>
                <script>let chansons = [];</script>
                @foreach($lastAll as $c)
                    <script>
                        chansons.push({
                            titre: "{{$c -> nom}}",
                            artiste: "{{$c -> utilisateur -> name}}",
                            album: "variable album",
                            pochette: "variable pochette",
                            fichier: "{{$c -> fichier}}",
                        });
                    </script>
                @endforeach
            </ul>
            <ul>
                <h2 class="home-title">Nouveautés</h2>
            </ul>
        </div>
    </div>
    </body>
@endsection