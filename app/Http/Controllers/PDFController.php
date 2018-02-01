<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcionario;
use App\Cargo;
use App\Setor;
use PDF;
use DB;
use Redirect;

class PDFController extends Controller
{

	public function pesquisa(){
		$cargos = Cargo::all();
        $setores = Setor::all();
        return view('pdfs.pesquisa', ['cargos' => $cargos,'setores' => $setores]);
	}

    public function gerapdf(Request $request){

        $func = DB::table('funcionarios')
                     ->select(DB::raw('fun_nome as nome, fun_salario as salario, fun_da_contratacao  as ano_contratacao'))
                     ->where('cargo_id', '=', $request->cargo_id)
                     ->where('setor_id', '=', $request->setor_id)
                     ->get();

        $total = DB::table('funcionarios')
                     ->select(DB::raw('sum(fun_salario) as salario'))
                     ->where('cargo_id', '=', $request->cargo_id)
                     ->where('setor_id', '=', $request->setor_id)
                     ->get();

    	$funcionarios = Funcionario::all();
        $pdfs = PDF::loadView('pdfs.gerapdf', ['funcionarios' => $func, 'total' => $total]);
    	return $pdfs->download('funcionarios.pdf');
        return Redirect::to('pdfs/pesquisa');
    }
}
