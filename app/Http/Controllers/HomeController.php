<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use App\Models\Form;
use 

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
        Flash('success','Formulario Enviado Com Sucesso');
        Redirect::back();
    }

}
