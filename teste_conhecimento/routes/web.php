<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\Discografi;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\Manage;

Route::get('/', [Discografi::class,'index'] );

Route::get('/cadastro', [AlbumController::class,'index'] );

Route::post('/cadastro/store', [AlbumController::class,'store'] );

Route::get('/cadastro2', [MusicaController::class,'index'] );

Route::post('/cadastro2/store', [MusicaController::class,'store'] );

Route::get('/administra', [Manage::class,'index'] );