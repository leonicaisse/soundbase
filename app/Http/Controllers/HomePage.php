<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Chanson;

class HomePage extends Controller
{
    public function index() {
        $lastAll = Chanson::all();
        return view('home', ['lastAll' => $lastAll]);
    }



    public function user($id){

        $utilisateur = User::find($id);

        if($utilisateur == false) abort('404');

        return view('user',['utilisateur' => $utilisateur]);
    }
}
