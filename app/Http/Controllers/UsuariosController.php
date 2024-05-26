<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\isEmpty;

class UsuariosController extends Controller
{
    public function showFormPost(Request $request){ 

        $user = Auth::user();

        return view('user.newpost',['user'=>$user]);       
    }

    public function newPost(Request $request){


        // $nuevoPost = new Posts();

        // $nuevoPost->user_id = 2;
        // $nuevoPost->title = $request->title;
        // $nuevoPost->slug = $request->slug;
        // $nuevoPost->body = $request->body;
        // $nuevoPost->tipo = $request->tipo;
        // $tipo = $nuevoPost->tipo;
        // $nuevoPost->image = $tipo == ''; 
    


        // $nuevoPost->save();


        // dd();

        $id = $request->id_usuario;
        

        dd($id);
    }






    public function myPosts(){
        $user = Auth::user();


        $posts = Posts::where('user_id', $user->id)->get();

        $isEmpty = count($posts);

        return view('user.myposts',compact('posts', 'isEmpty'));
    }
}
