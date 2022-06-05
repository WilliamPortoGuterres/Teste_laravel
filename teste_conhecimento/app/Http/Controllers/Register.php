<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Register extends Controller
{
    public function index()
    {



        return view('register');
    }
    public function store(Request $request)
    {

        $Register = new Register;

        $Register->nome = $request->nome;


        $Register->save();

        return redirect('/');
    }
}
