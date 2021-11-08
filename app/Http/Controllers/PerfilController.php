<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        
        //Enviar a la vista
        return view('perfil.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**public function create()
    {
        //Enviar a la vista
        return view('perfil.insert');
    }*/

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
            'email'=> 'required'
        ]);

        user::create($request->all());
        //Retornar la vista
        return redirect()->route('perfil.index')->with('exito','los cambios se ha guardado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $facturacion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $perfil = user::FindOrFail($id);
        //Enviar a la vista
        return view('perfil.view', compact('perfil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User $facturacion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $perfil = user::FindOrFail($id);
        //Enviar a la vista
        return view('perfil.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'nombre'=> 'required',
            'email'=> 'required',
            'password'=> 'required' 
        ]);

        $perfil = users::FindOrFail($id);

        $perfil->update($request->all());
        //Retornar la vista
        return redirect()->route('perfil.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $facturacion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $perfil = user::findOrfail($id);
        $perfil->delete();
        return redirect()->route('perfil.index');
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }


    

    
    


}

