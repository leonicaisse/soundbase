@extends('layouts.app')

@section('content')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <body>
    <div id="main-content-home">
        <h1>Bonjour <span>{{ Auth::user()->name }}</span> ! Comment allez-vous ? <br/><span style="font-size : 72pt">[WIP]</span>
        </h1>
        <ul>
            <h2 class="home-title">Nouveautés</h2>
            <div id="chansons"></div>
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
    </div>
    </body>
@endsection