<?php

namespace App\Http\Controllers;
use App\Models\Raja;
use Illuminate\Http\Request;

class RadaController extends Controller
{
    //
    function addData(Request $req)
    {
        $rada= new Raja;
        $rada->id=$req->id;
        $rada->raja_nimi=$req->raja_nimi;
        $rada->raja_asukoht=$req->raja_asukoht;
        $rada->save();
        return redirect('list');
    }
}
