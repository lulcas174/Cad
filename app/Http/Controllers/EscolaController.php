<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Escola;
use App\turma;
class EscolaController extends Controller
{
   public function index(){
       $escola = escola::all();
       return view('escola.index',compact('escola'));
   }

   public function formRegister(){
       return view('escola.create');
   }

   public function create(Request $request){
       escola::create([
           'id' => $request->id,
           'nome_escola'=>$request->nome_escola,
           'cnpj'=> $request->cnpj,
       ]);
       return redirect()->route('escola_index');
   }

   public function show($id){
       $escola = escola::find($id);
       return view('escola.create', compact('escola'));
   }

   public function update(Request $request, $id){
       $escola = [
           'id' => $request->id,
           'nome_escola'=>$request->nome_escola,
           'cnpj'=> $request->cnpj,
       ];

       escola::findOrFail($id)->update($escola);
       return redirect()->route('escola_index',compact('escola'));
   }

   public function delete($id){
       escola::where('id',$id)->delete();

       return redirect()->route('escola_index');
   }
}
