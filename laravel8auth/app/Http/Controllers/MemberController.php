<?php

namespace App\Http\Controllers;
use App\Models\Raja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    function list() 
    {
        $data = Raja::all();
        return view('rajad', ['rajad'=>$data]);
    }

    function delete($id) 
    {
        
        $data=Raja::find($id);
        $data->delete();
        return redirect('dashboard/rajad');
    }

    function showData($id) 
    {
        $data= Raja::find($id);
        return view('edit', ['data'=>$data]);
    }

    function update(Request $req) 
    {

        $post = Raja::find($req->id);
        if(Auth::id() == $post->author_id) {
            $data=Raja::find($req->id);
            $data->raja_nimi=$req->raja_nimi;
            $data->raja_asukoht=$req->raja_asukoht;
            $data->save();
            return redirect('dashboard/rajad');
            return $req->input();
        } else {
            return view('dashboard');
        }
        
    }
}