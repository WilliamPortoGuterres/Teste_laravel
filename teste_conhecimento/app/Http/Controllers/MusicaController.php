<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Musica;
use Exception;
use PhpParser\Node\Stmt\Catch_;

class MusicaController extends Controller
{
    public function index()
    {



        return view('register');
    }
    public function store(Request $request)
    {

        $musica = new Musica;

        $musica->nome = $request->nome;
        $musica->ano = $request->ano;

try{

    $musica->save();
    
    return redirect('/')->with('msg',"Musica foi salva com sucesso");
}Catch(Exception $e){

    return redirect('/')->with('msg',"Musica foi não salva com sucesso");

}
    }
}
