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
        return view('facturar.index');

    }


    public function create()
    {
        
    }

    public function edit(){
        $cliente = Cliente::orderBy('nombre','asc')->get();
    }
    
    public function show(){
        $cliente = Cliente::orderBy('nombre','asc')->get();
    }
}
