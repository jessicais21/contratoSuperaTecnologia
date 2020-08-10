<?php

namespace App\Http\Controllers;

use App\Unidade2;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class Unidades2Controller extends Controller
{
    public function create(){
        return view ('unidades2.create');
    }

    public function store (Request $request){
        Unidade2::create([
        'nome' => $request->nome,
        'email' => $request->email,
        'municipio' => $request->municipio,
        'tipo' => $request->tipo,
        'status' => $request->status,
    
        ]);
        return view ('unidades2.create');
    }

    public function view($nome)
    {
        $user = Unidade2::where('nome', $nome)->First();

        return view ('unidades2.show',['unidade2'=>$user]);
    }

    public function delete($nome){
        $user = Unidade2::where('nome', $nome)->First();
    }

    public function destroy($nome){
        $user = Unidade2::where('nome', $nome)->First();
        $user->delete($user->nome);
        return view ('unidades2.create',['unidade2'=>$user]);
       //  return view ('unidade');

    }

    public function edit($nome){
        $user = Unidade2::where('nome', $nome)->First();
     // $user = Unidade2::find($nome);
        return view ('unidades2.edit',['unidade2'=>$user]);
    }

  //esta função não esta funcionando. 
    public function update(Request $request, $nome){
        //$user = Unidade2::where('nome', $nome)->First()->update($request->all());
       // $user = Unidade2::findOrFail($nome);
        //$user->update([
      //     'nome' => $request->nome,
         //   'email' => $request->email,
         //   'municipio' => $request->municipio,
         //   'tipo' => $request->tipo,
         //   'status' => $request->status,
       // ]);
            //Unidade2::find($nome)->update($request->all());
         $user = Unidade2::findOrFail($nome);
         $this->validate($request,[
             'nome' => 'request',
             'email' => 'request',
            'municipio' => 'request',
            'tipo' => 'request',
           'status' => 'request',

         ]);

            $input = $request->all();
            $user->fill($input)->save();

            return view('unidades2.create');
            // return "produto atualizado";
    }

}