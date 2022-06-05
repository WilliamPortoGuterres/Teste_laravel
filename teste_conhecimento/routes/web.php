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
use App\Http\Controllers\Register;
use App\Http\Controllers\Manage;

Route::get('/', [Discografi::class,'index'] );

Route::get('/cadastro', [Register::class,'index'] );
Route::post('/cadastro/store', [Register::class,'store'] );

Route::get('/administra', [Manage::class,'index'] );