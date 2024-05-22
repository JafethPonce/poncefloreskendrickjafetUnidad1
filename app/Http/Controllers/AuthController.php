<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {

        return view('auth.login');
    }

    public function loginF(Request $request){

        
    }

    public function registro()
    {

        return view('auth.registro');
    }


    public function registroF(Request $request){
        
        $nuevo = new Usuarios();
        $nuevo->nombre = $request->nombre;
        $nuevo->correo = $request->correo;
        $nuevo->contrasena = Hash::make($request->contrasena);

        $nuevo->save();

        return view('auth.registro');
    }
    
}
