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
            @include('_chansons', ['chansons' => $lastAll]);
        </div>
    </div>
    </body>
@endsection