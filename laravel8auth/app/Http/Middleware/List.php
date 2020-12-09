<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Rajad
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function list() 
    {
        $data = Raja::all();
        return view('rajad', ['rajad'=>$data]);
    }
}
