<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Inventario;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index(Request $request)
    {
        {
            if($request){
                $query = $request->buscar;
                $cliente = Cliente::where('id','LIKE','%'.$query.'%')
                                                ->orderBy('id','asc')
                                                ->get();
                return view('cliente.index', compact('cliente', 'query'));
            }
            $cliente = Cliente::orderBy('nombre','asc')->get();
            //Enviar a la vista
            return view('facturacion.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        
        //Enviar a la vista
        return view('cliente.insert');
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
            'id'=> 'required',
            'nombre'=> 'required',
            'apellidos'=> 'required'
        ]);

        Cliente::create($request->all());
        //Retornar la vista
        return redirect()->route('cliente.index')->with('exito','Se ha guardado el cliente exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $cliente = Cliente::FindOrFail($id);
        //Enviar a la vista
        return view('cliente.view', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente 
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $cliente = Cliente::FindOrFail($id);
        //Enviar a la vista
        return view('cliente.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente 
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'id'=> 'required',
            'nombre'=> 'required',
            'apellidos'=> 'required'
        ]);

        $cliente = Cliente::FindOrFail($id);

        $cliente->update($request->all());
        //Retornar la vista
        return redirect()->route('cliente.index')->with('exito','Se ha modificado el cliente exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::findOrfail($id);

        $cliente->delete();
        return redirect()->route('cliente.index')->with('exito','¡Se ha eliminado el cliente corectamente!');
    }
    
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }
}