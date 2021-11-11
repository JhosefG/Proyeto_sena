<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function __construct(){

        $this->middleware('auth');

    }


    public function irInventario(){

        if (gate::denies('administrador')){

            return redirect(route('home'));
        }
        $user = Auth::user();
        return view('inventario.index',compact('inventario'));

    }
}
