<?php

namespace App\Http\Controllers;
use App\Models\Raja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RadaController extends Controller
{
    public function addData(Request $req)
    {
        $rada= new Raja;
        $rada->id=$req->id;
        $rada->raja_nimi=$req->raja_nimi;
        $rada->raja_asukoht=$req->raja_asukoht;
        $rada->author_id = Auth::id();
        $rada->save();
        return redirect('dashboard/rajad');
    }
}
