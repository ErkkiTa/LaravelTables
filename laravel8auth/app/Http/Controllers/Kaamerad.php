<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kaamerad extends Controller
{
    function leht() {
        return view('kaamerad');
    }
}
