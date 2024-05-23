<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {

        return view('auth.login');
    }

    public function loginF(Request $request)
    {

        $credentials = $request->validate([
            'correo' => ['required', 'email'],
            'contrasena' => ['required'],
        ]);

        // Intentar autenticar al usuario con las credenciales proporcionadas
        if (Auth::attempt(['correo' => $credentials['correo'], 'password' => $credentials['contrasena']])) {
            $request->session()->regenerate();
            return redirect()->intended('ayuda');
        }

        return back()->withErrors([
            'correo' => 'Credenciales incorrectas.',
        ]);
    }

    public function registro()
    {

        return view('auth.registro');
    }


    public function registroF(Request $request)
    {

        $nuevo = new Usuarios();
        $nuevo->nombre = $request->nombre;
        $nuevo->correo = $request->correo;
        // $nuevo->contrasena = Hash::make($request->contrasena);
        $nuevo->contrasena = $request->contrasena;

        $nuevo->save();

        return view('auth.registro');
    }


    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
