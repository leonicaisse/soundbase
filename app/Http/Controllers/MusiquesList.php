<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MusiqueList;

class MusiquesList extends Controller
{
    function show(){
       $listeMusiques = MusiqueList::all();
       $musique1 = MusiqueList::find(1);
        //return view('musique', ['musiques' => $listeMusiques]);
        return view('musique', ['musiques' => $listeMusiques, 'musiqueSelect' => $musique1]);
    }
}
