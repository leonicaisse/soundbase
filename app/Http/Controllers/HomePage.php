<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chanson;

class HomePage extends Controller
{
    public function index() {
        $lastAll = Chanson::all();
        return view('home', ['lastAll' => $lastAll]);
    }
}
