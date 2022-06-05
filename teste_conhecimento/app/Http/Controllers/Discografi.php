<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Album;

class Discografi extends Controller
{
    public function index(){

            $albums= Album::all();

        return view('discografi',['albums'=>$albums]);
    }
}
