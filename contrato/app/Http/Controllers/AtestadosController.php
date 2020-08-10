<?php

namespace App\Http\Controllers;

use App\Atestados;
use Illuminate\Http\Request;

class AtestadosController extends Controller
{
    public function create(){
        return view ('atestado.create');
    }

    public function store(Request $request)
    {
        Atestados::create([
            'paciente' => $request->paciente,
            'acompanhante' => $request->acompanhante,
            'obito' => $request->obito,
        ]);

        return view ('atestado.create');

    }

    public function view($paciente)
    {   
        $user = Atestados::where('paciente', $paciente)->First();
        return view ('atestado.show',['atestado'=>$user]);

    }

    public function delete($paciente){
        $user = Atestados::where('paciente', $paciente)->First();
    }

    public function destroy($paciente){
        $user = Atestados::where('paciente', $paciente)->First();
        $user->delete($user->paciente);
        return view ('atestado.create',['atestados'=>$user]);

    }

}
