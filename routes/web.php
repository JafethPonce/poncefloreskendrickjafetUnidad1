<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\PageController;
use App\Models\Usuarios;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


// Route::get('/', function(){
//     return view('welcome');
// });

Route::get('/ayuda', function(){
    $user = Auth::user();
    return view('ayuda',['user'=>$user]);
})->middleware('auth')->name('ayuda');


Route::controller(UsuariosController::class)->group(function(){ 


    Route::get('/user/newpost',    'showFormPost')->name('showFormPost');
    Route::post('/user/newpostG',    'newPost')->name('newPost');

    Route::get('/user/myposts', 'myPosts')->name('myPosts');


    // Route::get('/user/',        'index')->name('blog');
    // Route::get('/user/',        'index')->name('blog');
    // Route::get('/user/',        'index')->name('blog');

    // Route::get('/user',        'index')->name('');
    // Route::get('/user/profile', 'showProfile')->name('perfil');


})->middleware('auth');




Route::controller(PageController::class) -> group(function(){
    Route::get('/',           'index')->name('home');  
    Route::get('posts', 'posts')->name('posts')->middleware('auth');
    Route::get('post/{post:slug}', 'post')->name('post')->middleware('auth');
});














Route::controller(AuthController::class)->group(function(){

    Route::get('/auth/login',           'login')->name('auth.login');
    Route::get('/auth/registro',        'registro')->name('auth.registro');
    Route::post('/auth/loginF',          'loginF')->name('auth.loginF');
    Route::post('/auth/registroF',          'registroF')->name('auth.registroF');
    Route::post('/auth/logout',          'logout')->name('auth.logout');

});

