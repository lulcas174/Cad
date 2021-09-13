<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Escola;
use App\turma;
class TurmaController extends Controller
{
    public function index(){
        $turma = turma::all();
        return view('turma.index',compact('turma'));
        
    }
    //essa função vai levar ao formulário
    public function formRegister(){

     return view('turma.create');
    }
    
    public function create(Request $request){
         turma::create([
             'id'=>$request->id,
             'serie_turma'=>$request->serie_turma,
         ]);
     return redirect()->route('turma_index');
    }
    //função que chama o formulário de editar
    public function show($id){
        $turma = turma::find($id);
        return view('turma.create', compact('turma'));
    }
    //função que vai chamar a atualização quando apertar o botão
    public function update(Request $request,$id){
     
         $turma = [
            'id'=>$request->id,
            'serie_turma'=>$request->serie_turma,
        ]; 
   
         turma::findOrFail($id)->update($turma);
        // dd($turma);
        // return view('turma.index', compact('turma'));
        return redirect()->route('turma_index',compact('turma'));
    }
 
    public function delete($id){
        turma::where('id',$id)->delete();
     return redirect()->route('turma_index');     
    }
}
