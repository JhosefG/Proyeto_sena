<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invetario;
use App\Models\Cliente;


class FacturacionController extends Controller
{
    //
    public function index(){
        $clientes= Cliente::orderBy('nombre','asc')->get();
        return view('facturar.index',compact('clientes'));

    }
}
