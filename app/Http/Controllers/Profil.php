<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Profil extends Controller
{
    public function update(Request $request)
    {
        $user = User::find(Auth::user()->id);

        if ($request->input('username')) {
            $user->name = $request->input('username');
        }
//        $user->password = $request->input('password');  ATTENTION : faut get comment chiffrer
        if ($request->file('avatar')) {
            $user->avatar = $request->file('avatar')->store('public/images/' . Auth::id());
            $user->avatar = str_replace("public/", "/storage/", $user->avatar);
        }
        $user->save();

        return redirect("/user/" . Auth::user()->id);
    }
}
