@extends('layouts.app')

@section('content')
    <div class="main-landing-black">
        <div class="main-connexion">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <h1>Réinitialiser son mot de passe</h1>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <fieldset>
                                    <input id="email-reset" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Adresse e-mail" required>
                                </fieldset>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4 reset-center">
                                    <button type="submit" id="submit-reset" class="btn btn-primary">
                                        Envoyer le lien de réinitialisation
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
