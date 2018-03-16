@extends('layouts.app')
@section('content')


    <b>{{ var_dump($musiques) }}</b>
    <br>
    <br>
    <br>
    <b>{{ $musiqueSelect['nom'] }}</b>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/wavesurfer.js/1.4.0/wavesurfer.min.js"></script>
    <div id="waveform" class="waveform"></div>
    <script src="./js/wave.js"></script>
    <script>
        createWave({{$musiqueSelect['nom']}});

    </script>
    <button id="play-btn" onclick="wavesurfer.playPause(); changeSymbol(this.id);">pause</button>
    <div id="timecode"></div>
@endsection
