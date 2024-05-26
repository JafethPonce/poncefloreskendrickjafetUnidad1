<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function showFormPost(Request $request){ 


        $nuevoPost = new Posts();

        $nuevoPost->user_id = 2;
        $nuevoPost->title = $request->title;
        $nuevoPost->slug = $request->slug;
        $nuevoPost->body = $request->body;
        $nuevoPost->tipo = $request->tipo;
        $tipo = $nuevoPost->tipo;
        $nuevoPost->image = $tipo == ''; 
    


        $nuevoPost->save();


    }
}
