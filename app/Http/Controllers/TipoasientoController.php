<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TipoAsiento;
use Illuminate\Http\Request;

class TipoasientoController extends Controller
{
    //

    public function index(){
        $tipos = TipoAsiento::all();
        return view('tiposAsientos', compact('tipos'));
    }

    public function agregar(){
        return view('agregarTipoAsiento');
    }
}
