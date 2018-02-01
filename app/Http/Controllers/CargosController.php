<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cargo;
//use App\Http\Request;
use Redirect;

class CargosController extends Controller
{
     public function index(){
     	$cargos =  Cargo::get();
    	return view('cargos.lista', ['cargos' => $cargos]);
    }

    public function add(){
    	return view('cargos.add');
    }

    public function salvar(Request $request){
    	
    	$cargo = new Cargo();
    	$cargo = $cargo->create($request->all());
    	\Session::flash('mensagem_sucesso', 'Cargo cadastrado com sucesso!');
    	return Redirect::to('cargos/add');
    }

   public function editar($id){
        $cargo = Cargo::findOrFail($id);
        return view('cargos.add', ['cargo' => $cargo]);
    }

    public function atualizar($id, Request $request){
        $cargo = Cargo::findOrFail($id);
        $cargo->update($request->all());
        \Session::flash('mensagem_sucesso', 'Cargo atualizado com sucesso!');
        return Redirect::to('cargos/'.$cargo->id.'/editar');
    }

    public function deletar($id){
        $cargo = Cargo::findOrFail($id);
        $cargo->delete();
        \Session::flash('mensagem_sucesso', 'Cargo deletado com sucesso!');
        return Redirect::to('cargos');
    }
}
