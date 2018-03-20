@extends('layouts.app')

@section('content')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <body>
    <div id="main-content-home">
        <div class="welcome-home">
            <h1 class="main-title-home"><span>{{$utilisateur->name }}</span></h1>
        </div>
        <div id="content-home">
            @include('_chansons', ['chansons' => $utilisateur -> chansons]);
        </div>
    </div>
    </body>
@endsection