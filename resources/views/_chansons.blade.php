<ul>
    <div id="chansons" class="chanson-folder"></div>
    <script>let chansons = [];</script>
    <?php $i = 0 ?>
    @foreach($chansons as $c)
        <?php $i++ ?>
        <script>
            chansons.push({
                titre: "{{$c -> nom}}",
                artiste: "{{$c -> utilisateur -> name}}",
                artiste_id: "{{$c -> utilisateur -> id}}",
                album: "variable album",
                pochette: "{{$c -> pochette}}",
                fichier: "{{$c -> fichier}}",
            })

            @if(\Illuminate\Support\Facades\Auth::id() == $c -> utilisateur -> id)
            $('#chansons').append('<a href="/delete-song/{{$c -> id}}">DELETE</a>');
            @endif
            //console.log(chanson.titre+' | '+chanson.artiste+' | '+chanson.album+' | '+chanson.pochette+' | '+chanson.fichier);
            $('#chansons').append(`<div class="chanson-list"><p><a class="chanson" href="#" data-titre="{{$c -> nom}}" data-artiste="{{$c -> utilisateur -> name}}" data-artiste_id="{{$c -> utilisateur -> id}}" data-album="NULL" data-pochette="{{$c -> pochette}}" data-fichier="{{$c -> fichier}}" data-key="{{$i}}"><img src="{{$c -> pochette}}" style="width: 150px;height: 150px"/> <b>{{$c -> nom}}</b><a class="chanson-author" href="/user/{{$c -> utilisateur -> id}}">{{$c -> utilisateur -> name}}</a></p></div>`);

        </script>
    @endforeach
    <script>

    </script>
</ul>


