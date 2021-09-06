<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Escola;
use App\turma;
class EscolaController extends Controller
{
    //Verificar style de sucesso e de error 

    //essa função vai levar a paginação/data table
   public function index(){
       $escola = Escola::all();
       return view('escola.index',compact('escola'));
   }
   //essa função vai levar ao formulário
   public function formRegister(){
     
    return view('escola.create');
   }
   public function create(Request $request){
        $request->validate([
            'nome_escola'=>'required',
            'cnpj'=>'required',
        ]);
        Escola::create([
            'id'=>$request->id,
            'nome_escola'=>$request->nome_escola,
            'cnpj'=>$request->cnpj,
        ]);
    return redirect()->route('escola_index',compact('escola'));
   }
   //função que chama o formulário de editar
   public function show($id){
       $escola = Escola::find($id);
       return view('escola.create', compact('escola'));
   }
   //função que vai chamar a atualização quando apertar o botão
   public function update(Request $request,$id){
        $escola = [
            'id'=>$request->id,
            'nome_escola'=>$request->nome_escola,
            'cnpj'=>$request->cnpj,
       ];
       Escola::findOrFail($id)->update($escola);
      
       return redirect()->route('escola_index',compact('escola'));
   }

   public function delete($id){
    Escola::where('id',$id)->delete();
       
    return redirect()->route('escola_index',compact('escola'));     
   }
   
   public function Consultar($id){
    $turma = turma::all();
    return redirect()->route('turmas',compact('turma'));
   }
}
