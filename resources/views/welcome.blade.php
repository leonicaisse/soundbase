<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SoundBase</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
   <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
@extends('layouts.app')
@section('content')
<body>
    <div class="content">
        <div class="main-landing">
            <div class="text-landing">
                @guest
                    <h1 class="title-landing">Votre <span>musique</span>,<br/>à portée de main</h1>
                    <h2 class="subtitle-landing">Accèdez à des millions de titres en écoute illimitée</h2>
                    <ul>
                    <li><img src="images/check_orange.svg">Créez vos propres playlists</li>
                    <li><img src="images/check_orange.svg">Importez et partagez vos morceaux</li>
                    </ul>
                @else
                    <h1>WIP</h1>
                @endguest
            </div>
        </div>
    </div>
</body>
@endsection
</html>
