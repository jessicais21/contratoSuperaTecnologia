<?php

namespace App\Http\Controllers;

use App\Unidade;
use Illuminate\Http\Request;

class UnidadesController extends Controller
{
    public function create(){
        return view ('unidades.create');
    }

    public function store (Request $request){
        Unidade::create([
        'nome' => $request->nome,
        'email' => $request->email,
        'municipio' => $request->municipio,
        'tipo' => $request->tipo,
        'status' => $request->status,
    
        ]);
        return view ('unidades.create');
    }

}
