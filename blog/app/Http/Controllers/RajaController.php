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

    function delete($id) {
        $data = Raja::all();
        $data=Raja::find($id);
        $data->delete();
        return redirect()->to('/list');
    }

    function showData($id) {
        return Raja::find($id);

    }
}
