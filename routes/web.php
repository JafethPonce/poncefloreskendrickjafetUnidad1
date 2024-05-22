<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsuariosController;
use App\Models\Usuarios;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function(){
    return view('welcome');
});

Route::get('/ayuda', function(){
    return view('ayuda');
})->middleware('auth')->name('ayuda');


Route::controller(UsuariosController::class)->group(function(){ 

});



Route::controller(AuthController::class)->group(function(){

    Route::get('/auth/login',           'login')->name('auth.login');
    Route::get('/auth/registro',        'registro')->name('auth.registro');


    Route::post('/auth/loginF',          'loginF')->name('auth.loginF');
    Route::post('/auth/registroF',          'registroF')->name('auth.registroF');

});

