@extends('layouts.app')

@section('content')
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
<div class="main-landing">
        <div class="main-inscription">
            <h1>Inscrivez-vous en un clic</h1>
                    <form id="register" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <!--<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">-->
                            <fieldset>
                    <input placeholder="Nom d'utilisateur*" type="text" name="name" id="name" tabindex="1" value="{{ old('name') }}" required autofocus>
                </fieldset>

                                @if ($errors->has('name'))
                                        <strong>{{ $errors->first('name') }}</strong>
                                @endif

                        <!--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">-->
                        
                <fieldset>
                    <input placeholder="Adresse email*" type="email" name="email" id="email" tabindex="2" value="{{ old('email') }}" required>
                </fieldset>

<!--
                                @if ($errors->has('email'))
                                        <strong>{{ $errors->first('email') }}</strong>
                                @endif
-->
                        <!--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">-->
                        
                <fieldset>
                    <input placeholder="Mot de passe*" type="password" name="password" id="password" tabindex="3" required>
                </fieldset>

<!--
                                @if ($errors->has('password'))
                                        <strong>{{ $errors->first('password') }}</strong>
                                @endif
-->

                <fieldset>
                    <input placeholder="Confirmation mot de passe*" type="password" name="password_confirmation" id="password-confirm" tabindex="4" required>
                </fieldset>
                         <fieldset id="last-field">    
                    <button name="submit" type="submit" id="submit"><a class="register">S'inscrire</a></button>
                </fieldset>
                    </form>
            <h2 class="background"><span class="double-line">Ou</span></h2>
            <a class="facebook">Inscription avec Facebook</a>
            <p>Vous possèdez déjà un compte ? <a href="{{ route('login') }}" class="link-orange">Connexion</a></p>
    </div>
</div>
@endsection
