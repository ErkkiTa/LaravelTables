<?php

namespace App\Http\Controllers;
use App\Models\Raja;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    function show() {
        $data = Raja::all();
        return view('dashboard/todo', ['rajad'=>$data]);
    }
}
