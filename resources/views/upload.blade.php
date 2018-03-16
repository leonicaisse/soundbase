@extends("layouts.app")
@section('content')
    ​<link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <form method="POST" action="/create-song" enctype="multipart/form-data">
        {{ csrf_field() }}
        ​
        <label>Nom</label><input type="text" name="nom" placeholder="Nom de la chanson">
        <br/>
        <label>Style</label><input type="text" name="style" placeholder="Style de la chanson">
        <br/>
        <input type="file" style="display: none" class="choose-file" name="chanson"><label for="chanson">Issou</label>
        <br/>
        {{csrf_field()}}
        <input type="submit" class="upload-file" value="Poster">
    </form>
    ​
@endsection