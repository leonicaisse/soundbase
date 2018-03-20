<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Chanson;
use Illuminate\Support\Facades\Auth;

class HomePage extends Controller
{
    public function index()
    {
        $lastAll = Chanson::all();
        return view('home', ['lastAll' => $lastAll]);
    }


    public function user($id)
    {

        $utilisateur = User::find($id);

        if ($utilisateur == false) abort('404');

        return view('user', ['utilisateur' => $utilisateur]);
    }

    public function suivre($id)
    {
        $utilisateur = User::find($id);

        if ($utilisateur == false) abort('404');

        Auth::user()->jeLesSuis()->toggle($id);
        return back();
    }

    public function recherche($search)
    {
        $users = User::whereRaw("name LIKE CONCAT(?, '%')", [$search])->get();
        $chansons = Chanson::whereRaw("nom LIKE CONCAT(?, '%')", [$search])->get();
        return view('recherche', ['utilisateurs' => $users, 'chansons' => $chansons, 'recherche' => $search]);
    }
}
