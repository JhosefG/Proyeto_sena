<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $clientes= Cliente::orderBy('nombre','asc')->get();
        return view('facturar.index',compact('clientes'));

    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }
    
}
