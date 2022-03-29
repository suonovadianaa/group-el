<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;

class FormController extends Controller
{
    public function index(Request $request){
        $data=$request->all();
        Form::create($data);
        return back();
    }
}
