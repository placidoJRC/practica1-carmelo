<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RutasController extends Controller
{

    private $mensajes = [
        'mensaje1' => 'el usuario o contraseña  no es valido',
    ];

    function home(Request $request)
    {
        return view('base.home');
    }

    function login(Request $request,$mensaje='')
    {
        $datos = [];
        if(isset($this->mensajes[$mensaje])){
        $datos = [
            'mensaje' =>$this->mensajes[$mensaje]
        ];
        }
        return view('base.login')->with($datos);
    }

    function user(Request $request,$correo='')
    {
        $datos = [];

        $datos = [
            'correo' =>$correo
        ];
        return view('base.user')->with($datos);
    }

    function register(Request $request)
    {
      
        return  view('base.register');
    }

    function registerHome(Request $request)
    {
        return redirect('home/');
    }

    function loginUsu(Request $request)
    {
        $valores=[];
        $correo = $request->input('correo');
        $clave = $request->input('clave');
        $valores=['correo' => $correo,'clave' => $clave];
        if(strcasecmp($correo,'placido')===0 && strcasecmp($clave,'123')===0)
        {
           return redirect("user/$correo");
        }  

         else
        {
            return redirect('login/mensaje1')->withInput($request->except('clave'));//except para vaciar esos campos
        }
    }
}
