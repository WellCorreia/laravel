@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Funcionários

				
                <a class ="pull-right" href="{{url('funcionarios/add')}}">Cadastrar Funcionários</a>                
           
                </div>

                
                <div class="panel-body">
                   @if(Session::has('mensagem_sucesso'))
                      <div class="alert alert-sucess">{{ Session::get('mensagem_sucesso') }}</div>
                  @endif
                  <table class="table">
                       <th>Id</th>
                       <th>Nome</th>
                       <th>Salário</th>
                       <th>Ano Nascimento</th>
                       <th>Ano Contrato</th>
                       <th>Cargo_id</th>
                       <th>Setor_id</th>
                       <th>Editar</th>
                       <th>Excluir</th>

                       <tbody>
                        @foreach($funcionarios as $funcionario)
                           <tr>
                               <td>{{ $funcionario->id }}</td>
                               <td>{{ $funcionario->fun_nome }}</td>
                               <td>{{ $funcionario->fun_salario }}</td>
                               <td>{{ $funcionario->fun_da_nascimento }}</td>
                               <td>{{ $funcionario->fun_da_contratacao }}</td>
                               <td>{{ $funcionario->cargo_id }}</td>
                               <td>{{ $funcionario->setor_id }}</td>
                               <td><a href="funcionarios/{{ $funcionario->id }}/editar" class="btn btn-default btn-primary">Editar</a></td>
                               
                               <td>{!! Form::open(['method' => 'DELETE', 'url' => '/funcionarios/'.$funcionario->id]) !!}
                               <button class="btn btn-secundary">Excluir</button>
                               {!! Form::close() !!}</td>

                           </tr>
                        @endforeach
                       </tbody>

                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection