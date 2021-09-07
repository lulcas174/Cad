<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\estudante;

class EstudanteController extends Controller
{
    public function index(){
        $estudante = estudante::all();
        return view('estudante.index',compact('estudante'));
    }

    public function formRegister(){
        return view('estudante.create');
    }

    public function create(Request $request){
        estudante::create([
            'id'=>$request->id,
            'nome_aluno'=>$request->nome_aluno,
            'idade_aluno'=>$request->idade_aluno,
            'cpf_aluno'=>$request->cpf_aluno,
            'serie_aluno'=>$request->serie_aluno,
        ]);
        return redirect()->route('estudante_index');
    }

    public function show($id){
        $estudante = estudante::find($id);
        return view('estudante.create',compact('estudante'));
    }

    public function update(Request $request, $id){
            $estudante = [
                'id'=>$request->id,
                'nome_aluno'=>$request->nome_aluno,
                'idade_aluno'=>$request->idade_aluno,
                'cpf_aluno'=>$request->cpf_aluno,
                'serie_aluno'=>$request->serie_aluno,
            ];
            estudante::findOrFail($id)->update($estudante);

        return view('estudante.index',compact('estudante'));
    }

    public function delete($id){
        estudante::where('id',$id)->delete();

        return redirect()->route('escola_index');
    }
}
