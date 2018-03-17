@extends('layouts.app')

@section('content')
    <div class="main-landing-black">
        <div class="main-connexion">
            <h1>Connectez-vous</h1>
            <form id="login" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <fieldset>
                        <input placeholder="Adresse email*" type="text" name="email" id="email" tabindex="1" value="{{ old('email') }}" required autofocus>
                    </fieldset>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            <!--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">-->
                <fieldset>
                    <input placeholder="Mot de passe*" type="password" name="password" id="password" tabindex="2" required>
                </fieldset>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                <fieldset id="last-field">
                    <input type="checkbox" name="remember" id="remember" placeholder="Se souvenir de moi" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember"></label>
                    <span class="remember">Se souvenir de moi</span>
                    <button name="submit" type="submit" id="submit-log">Se connecter</button>
                </fieldset>

            </form>
            <h2 class="background"><span class="double-line">Ou</span></h2>
            <a href="#" class="facebook">Connexion avec Facebook</a>
            <p class="p-center">Vous ne possèdez pas de compte ? <a href="{{ route('register') }}" class="link-orange">Inscription</a></p>
            <a class="link-orange p-center" href="{{ route('password.request') }}">Mot de passe oublié ?</a>

        </div>
    </div>
@endsection
