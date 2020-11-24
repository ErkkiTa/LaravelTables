<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Raja;
class MemberController extends Controller
{
    //
    function list() 
    {
        
        $data = Raja::all();
        return view('list', ['rajad'=>$data]);
    }

    function delete($id) 
    {
        $data=Raja::find($id);
        $data->delete();
        return redirect('list');
    }

    function showData($id) 
    {
        $data= Raja::find($id);
        return view('edit', ['data'=>$data]);
    }

    function update(Request $req) 
    {
        $data=Raja::find($req->id);
        $data->raja_nimi=$req->raja_nimi;
        $data->raja_asukoht=$req->raja_asukoht;
        $data->save();
        return redirect('list');
        //return $req->input();
    }
}
