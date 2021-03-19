<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Anduri;
use Illuminate\Support\Facades\Auth;

class AnduriController extends Controller
{
    function show() {
        $data = Anduri::all();
        return view('andur', ['andurid'=>$data]);
    }

    function addAndur(Request $req)
    {
        $andurid= new Anduri;
        $andurid->id=$req->id;
        $andurid->anduri_nimi=$req->anduri_nimi;
        $andurid->anduri_asukoht=$req->anduri_asukoht;
        $andurid->author_id = Auth::id();
        $andurid->save();
        return redirect('dashboard/andur');
    }

    function show2() {
        $data = Anduri::all();
        return view('andurid', ['andurid'=>$data]);
    }

    function delete($id) 
    {
        $data=Anduri::find($id);
        $data->delete();
        return redirect('dashboard/andur');
    }


    function showData($id)
    {
        
        $data= Anduri::find($id);
        return view('editandur', ['data'=>$data]);
    }
    
    function update(Request $req) 
    {
        $data=Anduri::find($req->id);
        $data->id=$req->id;
        $data->anduri_nimi=$req->anduri_nimi;
        $data->anduri_asukoht=$req->anduri_asukoht;
        $data->save();
        return redirect('andurid');
        
    }
}

    