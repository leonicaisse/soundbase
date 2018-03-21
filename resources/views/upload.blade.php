@extends("layouts.app")
@section('content')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <body>
    <div id="main-content-home">
        <div class="welcome-home">
            <h1 class="main-title-home">Uploader sur Soun<span>dB</span>ase
            </h1>
        </div>
        <div id="content-home">

            <form action='/create-song' id="upload" method="POST" enctype="multipart/form-data">
                <div class="grey-background">
                    <div class="form-upload-left">
                        <label id="choose-image-label" for="choose-image">Mettre à jour</label>
                        <input type="file" name="pochette" id="choose-image">
                    </div>
                    <div class="form-upload-right">
                        <fieldset>
                            <h4 class="blue-title">Titre<span>*</span></h4>
                            <input placeholder="Titre de la chanson" type="text" name="nom" id="song-name" tabindex="1"
                                   required>
                        </fieldset>
                        <fieldset>
                            <h4 class="blue-title">Genre<span>*</span></h4>
                            <input placeholder="Genre de la chanson" type="text" name="style" id="style" tabindex="2"
                                   required>
                        </fieldset>
                        <fieldset>
                            <h4 class="blue-title">Fichier<span>*</span></h4>
                            <label id="song-file-label" for="choose-file">Ajouter un fichier</label>
                            <input placeholder="Ajouter un fichier" type="file" name="chanson" id="choose-file"
                                   tabindex="3" required>
                        </fieldset>
                        <p class="blue-title italic-paragraph">En cliquant sur le bouton uploader je reconnais avoir
                            pris connaissance des <span><a href="#" class="link-orange">Conditions Générales d'Utilisation de SoundBase</a></span>
                            et je certifie être propriétaires des droits relatifs au fichier mis en ligne</p>
                    </div>


                    {{ csrf_field() }}
                </div>
                <div class="button-submit">
                    <button type="submit" class="upload-file" id="upload-file" name="upload-file">Uploader</button>
                </div>

            </form>

        </div>
    </div>
    </body>
@endsection