<?php

namespace App\Http\Controllers;
use App\Models\Raja;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Models\Anduri;

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

    function lisa($id)
    {
        $data = Raja::find($id);
        $andurid = Anduri::doesntHave('rada')->get();
        return view('liitmine', [
            'data' => $data,
            'andurid' => $andurid
        ]);
    }

    function raja($id)
    {
        $data = Raja::find($id);
        $andurid = Anduri::get();
        return view('radade', [
            'data' => $data,
            'andurid' => $andurid
        ]);
    }

    public function attach(Request $request)
    {
        $track = Raja::find($request->rada);

        $andur = Anduri::find($request->anduri_id);
        $andur->rada()->associate($track);
        $andur->save();

        return redirect()->route('lisaandur', $track->id);
    }
}
