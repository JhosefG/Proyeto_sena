<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use Illuminate\Http\Request;

class InventarioController extends Controller
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
                $inventario = Inventario::where('nombre','LIKE','%'.$query.'%')
                                                ->orderBy('nombre','asc')
                                                ->get();
                return view('inventario.index', compact('inventario', 'query'));
            }
            $inventario = Inventario::orderBy('nombre','asc')->get();
            //Enviar a la vista
            return view('inventario.index');
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
        return view('inventario.insert');
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
            'nombre'=> 'required',
            'cantidad'=> 'required'
        ]);

        Inventario::create($request->all());
        //Retornar la vista
        return redirect()->route('inventario.index')->with('exito','Se ha guardado el producto exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventario  $facturacion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $inventario = Inventario::FindOrFail($id);
        //Enviar a la vista
        return view('inventario.view', compact('inventario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventario 
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $inventario = Inventario::FindOrFail($id);
        //Enviar a la vista
        return view('inventario.edit', compact('inventario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inventario 
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'nombre'=> 'required',
            'cantidad'=> 'required'
        ]);

        $inventario = Inventario::FindOrFail($id);

        $inventario->update($request->all());
        //Retornar la vista
        return redirect()->route('inventario.index')->with('exito','Se ha modificado el producto exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventario  $inventarios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inventario = Inventario::findOrfail($id);

        $inventario->delete();
        return redirect()->route('inventario.index')->with('exito','¡Se ha eliminado el producto corectamente!');
    }
    
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }

    public function newprofile(Request $request){
        
        Auth::logout();
        return redirect()->route('/register');
    }


    

    
    


}

