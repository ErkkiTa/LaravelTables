<?php

namespace App\Http\Controllers;
use App\Models\Anduri;
use App\Models\Raja;

use Illuminate\Http\Request;

class DynamicDependent extends Controller
{
    function index()
    {
     $anduri_nimi = Anduri::table('anduris')
         ->groupBy('anduri_nimi')
         ->get();
     return view('liitmine')->with('anduri_nimi', $anduri_nimi);
    }

    function rajad() {
        $raja_nimi = Raja::table('rajas')
        ->groupBy('raja_nimi')
        ->get();
    return view('radade')->with('raja_nimi', $raja_nimi);
    }
}
