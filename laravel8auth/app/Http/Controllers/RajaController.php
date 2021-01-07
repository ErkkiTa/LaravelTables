<?php

namespace App\Http\Controllers;
use App\Models\Raja;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

        $post = Raja::find($req->id);
        if(Auth::id() == $post->author_id) {
            $data=Raja::find($req->id);
            $data->raja_nimi=$req->raja_nimi;
            $data->raja_asukoht=$req->raja_asukoht;
            $data->save();
            return redirect('rajad');
            return $req->input();
        } else {
            return view('dashboard');
        }
        
    }
}
