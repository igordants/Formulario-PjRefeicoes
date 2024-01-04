<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Form;


class HomeController extends Controller
{
    public function formulario()
    {
        return view ('home');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'categories' =>'required',
            'subcategories' =>'required',
            'preparations' =>'required',
            'flavor' =>'required',
            'menu' =>'required',
            'served' =>'required',	
            'opinion' =>'required',	
            'service' =>'required',
            'hygiene' =>'required',
            'conditions' =>'required',	
            'comfortable' =>'required',	
            'general' =>'required',	
            'experience' =>'required',
        ]);
        Form::create($data);
        return redirect()->route('home')->with('success','Resposta enviada com sucesso');
    }
}