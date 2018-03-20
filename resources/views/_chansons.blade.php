<ul>
    <h2 class="home-title">Populaires</h2>
    <div id="chansons" class="chanson-folder"></div>
    <script>let chansons = [];</script>
    @foreach($chansons as $c)
        <script>
            chansons.push({
                titre: "{{$c -> nom}}",
                artiste: "{{$c -> utilisateur -> name}}",
                artiste_id: "{{$c -> utilisateur -> id}}",
                album: "variable album",
                pochette: "variable pochette",
                fichier: "{{$c -> fichier}}",
            });
        </script>
    @endforeach
</ul>