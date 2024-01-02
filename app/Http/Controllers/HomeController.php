<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function formulario()
    {
        return view ('home');
    }
    public function store(Request $request)
    {
        dd($request->All());
    }

}
