@extends("layouts.app")
@section('content')
    ​
    <form method="POST" action="/create-song" enctype="multipart/form-data">
        {{ csrf_field() }}
        ​
        <label>Nom</label><input type="text" name="nom" placeholder="Nom de la chanson">
        <br/>
        <label>Style</label><input type="text" name="style" placeholder="Style de la chanson">
        <br/>
        <input type="file" name="chanson">
        <br/>
        {{csrf_field()}}
        <input type="submit" value="Poster">
    </form>
    ​
@endsection