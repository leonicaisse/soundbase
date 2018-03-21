<ul>
    <div id="chansons" class="chanson-folder"></div>
    <script>let chansons = [];</script>
    @foreach($chansons as $c)
        <script>
            chansons.push({
                titre: "{{$c -> nom}}",
                artiste: "{{$c -> utilisateur -> name}}",
                artiste_id: "{{$c -> utilisateur -> id}}",
                album: "variable album",
                pochette: "{{$c -> pochette}}",
                fichier: "{{$c -> fichier}}",
            });
        </script>
    @endforeach
</ul>