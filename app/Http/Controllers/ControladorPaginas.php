<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorForm1;

class ControladorPaginas extends Controller
{
    function Fhome (){
        return view('home');
    }
    function Fingresar (){
        return view ('ingresar');
    }

    function Frecuerdos ($nombre='Invitado'){
        $arrNombres =['Carlos', 'Adriana','Luis'];
        return view ('recuerdos', compact('nombre','arrNombres'));
    }


    public function procesarRecuerdos(validadorForm1 $req){
        return redirect ('/ingresar')->with ('confirmacion', 'Tu usuario llego al controlador');
    }

    /*
    public function procesarRecuerdos(Request $req){
        if(request()->filled('txtUsuario')){
            return "Se llenó el título:".request()->input('txtUsuario');
        }
        return 'No se lleno el titulo';
    }
    */

}

