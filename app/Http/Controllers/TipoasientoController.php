<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TipoAsiento;
use Illuminate\Http\Request;

class TipoasientoController extends Controller
{
    //

    public function index(){
        $tipos = TipoAsiento::where('estado','A')->get();
        return view('tiposAsientos', compact('tipos'));
    }

    public function agregar(){
        return view('agregarTipoAsiento');
    }

    public function guardar(request $request){
        $nvotipo= new TipoAsiento();

        $nvotipo->descripcion= $request->input('descripcion');
        $nvotipo->precio= $request->input('precio');
        $nvotipo->estado= $request->input('estado');
        return view('agregarTipoAsiento');
    }
}
