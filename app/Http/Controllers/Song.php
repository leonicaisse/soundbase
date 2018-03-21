<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chanson;
use Illuminate\Support\Facades\Auth;


class Song extends Controller
{
    public function upload()
    {
        return view('upload');
    }

    public function create(Request $request)
    {
        if ($request->hasFile('chanson') && $request->file('chanson')->isValid()) {
            $c = new Chanson();
            $c->nom = $request->input('nom');
            $c->style = $request->input('style');
            $c->utilisateur_id = Auth::id();

            $c->fichier = $request->file('chanson')->store('public/audio/' . Auth::id());
            $c->fichier = str_replace("public/", "/storage/", $c->fichier);

            $c->pochette = $request->file('pochette')->store('public/pochette/' . Auth::id());
            $c->pochette = str_replace("public/", "/storage/", $c->pochette);
            $c->save();
        }
        return redirect("/home");
    }
}
