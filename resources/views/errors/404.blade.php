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
    <link href="{{ asset('css/404.css') }}" rel="stylesheet">
</head>

<body>
<div class="main-lost">
    <h1 class="text-lost">404</h1>
</div>
<div class="description-lost">
    <h1 class="title-lost">Oups</h1>
    <h2 class="subtitle-lost">Il n'y a rien a cet endroit</h2>
    <a href="{{ url('/home') }}" class="home">Retournez à l'accueil</a></div>
</body>
