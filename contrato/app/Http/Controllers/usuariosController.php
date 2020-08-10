<?php

namespace App\Http\Controllers;

use App\usuario;
use Illuminate\Http\Request;

class usuariosController extends Controller
{
    public function create(){
        return view ('usuario.create');
    }

    public function store (Request $request){
        usuario::create([
        'cpf' => $request->cpf,
        'nome' => $request->nome,
        ]);
        return view ('usuario.create');
    }

    public function view($cpf)
    {
        $user = usuario::where('cpf', $cpf)->First();

        return view ('usuario.show',['usuario'=>$user]);
    }

    public function delete($cpf){
        $user = usuario::where('cpf', $cpf)->First();
       // return view ('usuario.create',['usuario'=>$user]);
    }

    public function destroy($cpf){
        $user = usuario::where('cpf', $cpf)->First();
        $user->delete($user->cpf);
        return view ('usuario.create',['usuario'=>$user]);
        // return view ('/usuario/');

    }

}
