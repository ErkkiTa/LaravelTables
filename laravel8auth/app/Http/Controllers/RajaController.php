<?php

namespace App\Http\Controllers;
use App\Models\Raja;
use Illuminate\Http\Request;

class RajaController extends Controller
{
    
    function delete($id) 
    {
        $data=Raja::find($id);
        $data->delete();
        return redirect('dashboard/rajad');
    }

    function showData($id) 
    {
        $data= Raja::find($id);
        return view('dashboard/rajad/edit', ['data'=>$data]);
    }

    function update(Request $req) 
    {
        $data=Raja::find($req->id);
        $data->raja_nimi=$req->raja_nimi;
        $data->raja_asukoht=$req->raja_asukoht;
        $data->save();
        return redirect('rajad');
        
        return $req->input();
    }
}
