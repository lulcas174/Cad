<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\estudante;
use App\turma;
class EstudanteController extends Controller
{
  //Verificar style de sucesso e de error 

    //essa função vai levar a paginação/data table
    public function index(){
        $estudante = estudante::all();
        return view('estudante.index',compact('estudante'));
    }
    //essa função vai levar ao formulário
    public function formRegister(){
        $turma = turma::all();
     return view('estudante.create', compact('turma'));
    }
    public function create(Request $request){
         estudante::create([
             'id'=>$request->id,
             'nome_aluno'=>$request->nome_aluno,
             'cpf_aluno'=>$request->cpf_aluno,
             'idade_aluno'=>$request->idade_aluno,
             'serie_aluno'=>$request->serie_aluno,
         ]);
     return redirect()->route('estudante_index');
    }
    //função que chama o formulário de editar
    public function show($id){
        $turma = turma::all();
        $estudante = estudante::find($id);
        return view('estudante.create', compact('estudante','turma'));
    }
    //função que vai chamar a atualização quando apertar o botão
    public function update(Request $request,$id){
        $turma = turma::all();
         $estudante = [
             'id'=>$request->id,
             'nome_aluno'=>$request->nome_aluno,
             'cpf_aluno'=>$request->cpf_aluno,
             'idade_aluno'=>$request->idade_aluno,
             'serie_aluno'=>$request->serie_aluno,
        ];
        estudante::findOrFail($id)->update($estudante);
       
        return redirect()->route('estudante_index',compact('estudante','turma'));
    }
 
    public function delete($id){
        estudante::where('id',$id)->delete();
        
     return redirect()->route('estudante_index');     
    }
}
