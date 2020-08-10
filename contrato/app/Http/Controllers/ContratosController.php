<?php

namespace App\Http\Controllers;

use App\Contrato;
use Illuminate\Http\Request;

class ContratosController extends Controller
{
    public function create(){
        return view ('contrato.create');

    }

    public function store(Request $request)
    {
        Contrato::create([
            'cnpj' => $request->cnpj,
            'razaosocial' => $request->razaosocial,
            'nome' => $request->nome,
            'email' => $request->email,
            'logomarca' => $request->logomarca,
            'status' => $request->status,

        ]);

        return view ('contrato.create');

    }

    //testar depois e ainda falta criar a view
    public function view($cnpj)
    {   
        $user = Contrato::where('cnpj', $cnpj)->First();
        return view ('contrato.show',['contrato'=>$user]);

    }


    public function delete($cnpj){
        $user = Contrato::where('cnpj', $cnpj)->First();
    }

    public function destroy($cnpj){
        $user = Contrato::where('cnpj', $cnpj)->First();
        $user->delete($user->cnpj);
        return view ('contrato.create',['contratos'=>$user]);
    }

}
