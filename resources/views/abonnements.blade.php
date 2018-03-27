@extends('layouts.app')
@section('content')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <body>
    <div id="main-content-home">
        <div class="welcome-home">
            <h1 class="main-title-home"><span>Abonnements</span> :
            </h1>
        </div>
        <div id="content-home" class="abo-main">
            <div class="chanson-folder">
                @foreach($utilisateurs as $u)
                    {{--<div class="result-user"><a class="username" href="/user/{{$u -> id}}">{{$u -> name}}</a> <p>({{$u->ilsMeSuivent()->count()}} abonnés | {{$u->jeLesSuis()->count()}} abonnements)</p></div>--}}
                    <div class="result-user"><a class="username" href="/user/{{\App\User::find($u->suivi_id)->id}}">{{\App\User::find($u->suivi_id)->name}}</a> <p>({{\App\User::find($u->suivi_id)->ilsMeSuivent()->count()}} abonnés | {{\App\User::find($u->suivi_id)->jeLesSuis()->count()}} abonnements)</p></div>
                @endforeach
            </div>
            </ul>
        </div>
    </div>
    </div>
    </body>
@endsection