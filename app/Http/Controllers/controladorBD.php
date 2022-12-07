<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Contracts\Service\Attribute\Required;
use App\Http\Request\validadorForm1;

class controladorBD extends Controller
{
    public function index()
    {
        $consultaCiber = DB::table('tb_cyber')->get();
        return view('ciber', compact('consultaCiber'));
    }

    public function create()
    {
        return view('ingresar');
    }

    public function store(Request $req)
    {
        DB::table('tb_cyber')->insert([
            'usuario' => $req->input('txtUsuario'),
            'NComputadora' => $req->input('txtComputadora'),
            'tiempo' => $req->input('txtTiempo'),            
            "fecha"=>Carbon::now(),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now()
        ]);
        return redirect ('recuerdo/create')->with('mensaje', 'Tu usuario se ha guardado');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $guardarid = DB::table('tb_cyber') -> where ('idGuardar', $id) ->first();
        return view('editarCyber', compact('guardarid'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        DB::table('tb_cyber')->where('idGuardar', $id)->update([
            "usuario" => $req->input('txtUsuario'),
            "NComputadora" => $req->input('txtComputadora'),
            "tiempo" => $req->input('tiempo'),
            "updated_at" => Carbon::now(),
        ]);

        return redirect('recuerdo')->with('mensaje', 'Actualizado Correctamente');
    }
    public function confirm($id){
        $guardarid = DB::table('tb_cyber')->where('idGuardar', $id)->first();
        return view ('confirmElim', compact('guardarid'));
    }
    public function destroy($id)
    {
        DB::table('tb_cyber')->where('idGuardar', $id)->delete();
        return redirect('recuerdo')->with('mensaje', "Recuerdo eliminado");
    }
}
