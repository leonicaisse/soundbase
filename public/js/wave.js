function createWave(file) {
    var wavesurfer = WaveSurfer.create({
        container: '#waveform',
        waveColor: 'rgba(255,69,0,1)',
        progressColor: 'rgba(255,255,255,0.8)',
        barWidth: '3',
        barHeight: '2',
        cursorWidth: '2',
        cursorColor: '#1c1c1c',
    });

    wavesurfer.load(file);

    wavesurfer.on('ready', function () {
        wavesurfer.play();
    });

    function changeSymbol(id) {
        var symbol = document.getElementById("play-btn").innerHTML;
        if (symbol == "pause") {
            document.getElementById("play-btn").innerHTML = "play";
        } else {
            document.getElementById("play-btn").innerHTML = "pause";
        }
    }

    /*
    function displayTimeCode() {
        var currentTime = wavesurfer.getCurrentTime();
        currentTime = Math.floor(currentTime);
        currentTime = secondsToHms(currentTime);
        var duration = wavesurfer.getDuration();
        duration = Math.floor(duration);
        duration = secondsToHms(duration);
        document.getElementById("timecode").innerHTML = currentTime + " / " + duration;
    }
    setInterval(function () {
        displayTimeCode()
    }, 100);

    function secondsToHms(d) {
        d = Number(d);

        var h = Math.floor(d / 3600);
        var m = Math.floor(d % 3600 / 60);
        var s = Math.floor(d % 3600 % 60);

        return ('0' + h).slice(-2) + ":" + ('0' + m).slice(-2) + ":" + ('0' + s).slice(-2);
    }
    */
}
