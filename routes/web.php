<?php

use App\Http\Controllers\controllerUsuario;
use Illuminate\Routing\Controller;
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

Route::get('/', function () {
    return view('welcome');
});
/*
Route::post('/principal', [ControllerUsuario::class, 'store'])->name('usuario');
*/

/*
Route::post('/principal', 'controllerUsuario@index');
*/