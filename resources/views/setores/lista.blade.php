@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Setores

				
                <a class ="pull-right" href="{{url('setores/add')}}">Cadastrar Setores</a>                
           
                </div>

                
                <div class="panel-body">
                  @if(Session::has('mensagem_sucesso'))
                      <div class="alert alert-sucess">{{ Session::get('mensagem_sucesso') }}</div>
                  @endif
                  <table class="table">
                       <th>Id</th>
                       <th>Nome</th>
                       <th>Editar</th>
                       <th>Excluir</th>

                       <tbody>
                        @foreach($setores as $setor)
                           <tr>
                               <td>{{ $setor->id }}</td>
                               <td>{{ $setor->setor_nome }}</td>
                               <td><a href="setores/{{ $setor->id }}/editar" class="btn btn-default btn-primary">Editar</a></td>
                               
                               <td>{!! Form::open(['method' => 'DELETE', 'url' => '/setores/'.$setor->id]) !!}
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