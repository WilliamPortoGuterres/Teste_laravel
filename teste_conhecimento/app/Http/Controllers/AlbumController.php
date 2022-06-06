<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use Exception;
use PhpParser\Node\Stmt\Catch_;

class AlbumController extends Controller
{
    public function index()
    {



        return view('register');
    }
    public function store(Request $request)
    {

        $album = new Album;

        $album->nome = $request->nome;
        $album->ano = $request->ano;

try{

    $album->save();
    
    return redirect('/')->with('msg',"Album salvo com sucesso");
}Catch(Exception $e){

    return redirect('/')->with('msg',"Album não salvo com sucesso");

}
    }
}
