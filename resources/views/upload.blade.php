@extends("layouts.app")
@section('content')
    ​<link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <div class="main-connexion">
        <h1>Mettre en ligne une musique</h1>
    <form method="POST" action="/create-song" enctype="multipart/form-data">
        {{ csrf_field() }}
        ​
        <label>Nom</label><fieldset><input type="text" name="nom" id="song-name" placeholder="Nom de la chanson"></fieldset>
        <br/>
        <label>Style</label><fieldset><input type="text" name="style" id="style" placeholder="Style de la chanson"></fieldset>
        <br/>
        <input type="file" style="display: none" class="choose-file" name="chanson"><label for="chanson">Issou</label>
        <br/>
        {{csrf_field()}}
        <input type="submit" class="upload-file" value="Poster">
    </form>
        ​</div>
@endsection