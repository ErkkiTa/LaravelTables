<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Raja;
class RajaController extends Controller
{
    //
    function show() {
        $data = Raja::all();
        return view('list', ['rajad'=>$data]);
    }

}
