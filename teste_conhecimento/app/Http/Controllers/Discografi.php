<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Album;

class Discografi extends Controller
{
    public function index(){

$search = request('search');

        if($search)
        {
            $albums= Album::where([['nome','like','%'.$search.'%']])->get();
        }
            else
            {

                
                $albums= Album::all();
            }

        return view('discografi',['albums'=>$albums,'search'=>$search]);
    }
}
