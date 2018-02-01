<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcionario;
use App\Setor;
use App\Cargo;
use Redirect;

class FuncionariosController extends Controller
{
    public function index(){
    	$funcionarios =  Funcionario::get();
        return view('funcionarios.lista', ['funcionarios' => $funcionarios]);
    }

    public function add(){
    	//return view('funcionarios.add');
        $cargos = Cargo::all();
        $setores = Setor::all();
        return view('funcionarios.add', ['cargos' => $cargos,'setores' => $setores]);
    }

    public function salvar(Request $request){

    	$funcionario = new Funcionario();
    	//$funcionario = $request->all();
        //$funcionario->create($request->all());
    	//var_dump($request);
    	//$funcionario->fun_da_contratacao =  date('Y-m-d H:i:s,', strtotime(implode("-", explode("/", $request->fun_da_contratacao))));
    	//$funcionario->fun_da_nascimento = date('Y-m-d H:i:s,', strtotime(implode("-", explode("/", $request->fun_da_nascimento))));
    	//$data = date('Y-m-d H:i:s', $request->fun_da_contratacao);
    	$funcionario->create($request->all());
    	//return $request->all();
        \Session::flash('mensagem_sucesso', 'Funcionário cadastrado com sucesso!');
    	return Redirect::to('funcionarios/add');
    }

     public function editar($id){
        $funcionario = Funcionario::findOrFail($id);
        return view('funcionarios.add', ['funcionario' => $funcionario]);
    }

    public function atualizar($id, Request $request){
        $funcionario = Funcionario::findOrFail($id);
        $funcionario->update($request->all());
        \Session::flash('mensagem_sucesso', 'Funcionário atualizado com sucesso!');
        return Redirect::to('funcionarios/'.$funcionario->id.'/editar');
    }

    public function deletar($id){
        $funcionario = Funcionario::findOrFail($id);
        $funcionario->delete();
        \Session::flash('mensagem_sucesso', 'Funcionário deletado com sucesso!');
        return Redirect::to('funcionarios');
    }
}
