//https://www.w3schools.com/tags/ref_av_dom.asp pour les proprietes de <audio>


$('document').ready(function () {
    let player = $('#audio-player');
    player[0].volume = '0.8';
    //RIEN AVANT
    console.log(chansons);
    let playingKey;

    $.each(chansons, function (key, chanson) {
        //console.log(chanson.titre+' | '+chanson.artiste+' | '+chanson.album+' | '+chanson.pochette+' | '+chanson.fichier);
        $('#chansons').append(`<br /><a class="chanson" href="#" data-titre="${chanson.titre}" data-artiste="${chanson.artiste}" data-album="${chanson.album}" data-pochette="${chanson.pochette}" data-fichier="${chanson.fichier}" data-key="${key}"><b>${chanson.titre}</b> - <em>${chanson.artiste}</em></a>`);
    });

    $('#chansons').on('click', 'a.chanson', function (e) {
        e.preventDefault();
        let titre = $(this).attr('data-titre');
        let artiste = $(this).attr('data-artiste');
        let album = $(this).attr('data-album');
        let pochette = $(this).attr('data-pochette');
        let fichier = $(this).attr('data-fichier');
        playingKey = $(this).attr('data-key');

        player.attr('src', '/audio/' + fichier);
        player[0].load();
        player[0].play();
        $('#btn-plps').css('backgroundImage', 'url("/images/pause.png")');
        $('#song-playing').html(
            `<img src="/images/pochettes/${pochette}" class='chanson-pochette' width="75px"/><h3 class='chanson-titre'>${titre}</h3><h3 class='chanson-artiste'>${artiste} <em>${album}</em></h3>`
        );
    });

    $('#btn-plps').on('click', function () {
        if (player.prop('paused')) {
            player[0].play();
            $(this).css('backgroundImage', 'url("/images/pause.png")');
            //change en pause issvm
        } else {
            player[0].pause();
            $(this).css('backgroundImage', 'url("/images/play.png")');
        }
    });

    $('#btn-prev').on('click', function () {
        let previousKey;
        if (playingKey * 1 === 0) {
            previousKey = 0;
            console.log("premiere chanson !")
        } else {
            previousKey = playingKey * 1 - 1;
        }
        console.log(playingKey);
        console.log(previousKey);
        $('a[data-key="' + previousKey + '"]').click();
    });

    $('#btn-next').on('click', function () {
        let nextKey;
        if (playingKey * 1 < chansons.length - 1) {
            nextKey = playingKey * 1 + 1;
            $('a[data-key="' + nextKey + '"]').click();
        } else {
            $('a[data-key="0"]').click();
        }
    });

    $('#btn-mute').on('click', function () {
        if (player.prop('muted')) {
            player[0].muted = false;
            $(this).css('backgroundImage', 'url("/images/sound.svg")');
            $('#slider-vol').value = player[0].volume * 100;
        } else {
            player[0].muted = true;
            $(this).css('backgroundImage', 'url("/images/silent.svg")');
            $('#slider-vol').value = "0";
        }
    });

    //slider pour volume avec player.volume = (0 à 1);
    $('#slider-vol').on('input', function () {
        player[0].volume = this.value / 100;
        console.log('valeur slider :', this.value);
        console.log('volume player :', player.prop('volume'));
    });

    //slider pour currentTime (un bordel aya)
    // $('#time-prog').on('input', function () {
    //     ........
    // });

    // Number.prototype.mapRange = function (in_min, in_max, out_min, out_max) {
    //     return (this - in_min) * (out_max - out_min) / (in_max - in_min) + out_min;
    // }

    setInterval(function () {

        let currentTime = player[0].currentTime;
        let duration = player[0].duration;
        let currentSeconds = ("0" + Math.floor(currentTime % 60)).slice(-2);
        let currentMinutes = ("0" + Math.floor(currentTime / 60)).slice(-2);
        let totalSeconds = ("0" + Math.floor(duration % 60)).slice(-2);
        let totalMinutes = ("0" + Math.floor(duration / 60)).slice(-2);

        if (player[0].ended) $('#btn-next').click();
        //$('#duration').html(totalTime);
        $('#current-time').html(currentMinutes + ":" + currentSeconds);
        $('#duration').html(totalMinutes + ":" + totalSeconds);
    }, 500);

    $('input[type=range]').on('input', function (e) {
        let min = e.target.min,
            max = e.target.max,
            val = e.target.value;

        $(e.target).css({
            'backgroundSize': (val - min) * 100 / (max - min) + '% 100%'
        });
    }).trigger('input');

    $('#audio-player').on('timeupdate', function (e) {
        var timeProg = $('#time-prog');
        let min = timeProg.attr('min');
        let max = timeProg.attr('max');
        let val = timeProg.attr('value');

        timeProg.css({
            'backgroundSize': (val - min) * 100 / (max - min) + '% 100%'
        });
    }).trigger('input');

    $('#audio-player').on('timeupdate', function () {
        var timeProg = $('#time-prog');

        timeProg.attr("value", this.currentTime);
        timeProg.attr("max", $('#time-prog').attr('max'));
        timeProg.attr("max", this.duration);
    });
    //RIEN APRES
});

