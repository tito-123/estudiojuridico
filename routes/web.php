<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Auth::routes();

Route::get('/home', [
    HomeController::class, 'index'
])->name('home');



Route::resource('clientes', App\Http\Controllers\ClienteController::class);

Route::resource('empleados', App\Http\Controllers\EmpleadoController::class);


Route::resource('tramiteadmis', App\Http\Controllers\tramiteadmiController::class);

Route::resource('doctramiteadmis', App\Http\Controllers\DoctramiteadmiController::class);
