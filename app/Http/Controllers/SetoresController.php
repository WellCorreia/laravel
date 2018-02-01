<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setor;
use Redirect;
class SetoresController extends Controller
{
     public function index(){
    	$setores =  Setor::get();
        return view('setores.lista', ['setores' => $setores]);
        //return $setores;
    }

    public function add(){
    	return view('setores.add');
    }

    public function salvar(Request $request){
    	
    	$setor = new Setor();
    	$setor = $setor->create($request->all());
    	\Session::flash('mensagem_sucesso', 'Setor cadastrado com sucesso!');
    	return Redirect::to('setores/add');
    }
     public function editar($id){
        $setor = Setor::findOrFail($id);
        return view('setores.add', ['setor' => $setor]);
    }

    public function atualizar($id, Request $request){
        $setor = Setor::findOrFail($id);
        $setor->update($request->all());
        \Session::flash('mensagem_sucesso', 'Setor atualizado com sucesso!');
        return Redirect::to('setores/'.$setor->id.'/editar');
    }

    public function deletar($id){
        $setor = Setor::findOrFail($id);
        $setor->delete();
        \Session::flash('mensagem_sucesso', 'Setor deletado com sucesso!');
        return Redirect::to('setores');
    }
}
