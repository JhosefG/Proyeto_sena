<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventario;
use App\Models\Cliente;
use App\Models\Factura;


class FacturacionController extends Controller
{
    //
    public function index(){
        

        $clientes=Cliente::orderBy('nombre','asc')->get();
        
        $inventario=Inventario::orderBy('nombre','asc')->get();

        $facturas=Factura::orderBy('producto','asc')->get();


        // $facturas=Inventario::join('inventario', 'inventarios.id', '=', 'inventarios.id')-> Select('inventarios.*', 'inventarios.precio')->get();

        
        // $factura = Inventario::select('inventarios.*')->from('')->get();

        return view('facturar.index',compact('clientes','inventario','facturas'));


    }

    public function create()
    {
        

        $inventario=Inventario::orderBy('nombre','asc')->get();

        //Enviar a la vista
        return view('facturar.insert',compact('inventario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request);
        $request->validate([
            
            'producto'=> 'required',
            'cantidad'=> 'required',
            'precio'=> 'required'
        ]);

        Factura::create($request->all());
        //Retornar la vista
        return redirect()->route('facturar.index')->with('exito','Se ha agregado el producto exitosamente.');
    }

    public function destroy($id)
    {
        $facturar = Factura::findOrfail($id);

        $facturar->delete();
        return redirect()->route('facturar.index');
    }

}
