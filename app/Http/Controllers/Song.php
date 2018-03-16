<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chanson;


class Song extends Controller
{
    public function upload()
    {
        return view('upload');
    }

    public function create(Request $request)
    {
        print_r($_FILES);
        die(1);
    }
}
