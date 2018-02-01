@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cadastrar Funcionários

                  <a class ="pull-right" href="{{url('funcionarios')}}">Listagem de Funcionários</a>

                </div>

                <div class="panel-body">
                   @if(Session::has('mensagem_sucesso'))
                        <div class="alert alert-sucess">{{ Session::get('mensagem_sucesso') }}</div>
                    @endif


                    @if(Request::is('*/editar'))
                        {!! Form::model($funcionario, ['method' => 'PATCH', 'url' => 'funcionarios/'.$funcionario->id]) !!}
                    @else
                        {!! Form::open(['url' => 'funcionarios/salvar']) !!}
                    @endif

                        {!! Form::label('nomefun', 'Nome') !!}
                        {!! Form::input('text', 'fun_nome', '', ['class' => 'form-control', 'placeholder' => 'Ex: Wellington Correia'] ) !!}

                        {!! Form::label('salariofun', 'Salário') !!}
                        {!! Form::input('text', 'fun_salario', '', ['class' => 'form-control', 'placeholder' => '1000,00', 'ng-model' => 'modelo.preco', 'money-mask mony-mask-prepend' => 'R$'] ) !!}

                        {!! Form::label('datNascimento', 'Data de Nascimento') !!}
                        {!! Form::input('date', 'fun_da_nascimento', \Carbon\Carbon::now()->format('Y-m-d'), ['class' => 'form-control'])!!}

                        {!! Form::label('datContrato', 'Data de Contratação') !!}
                        {!! Form::input('date','fun_da_contratacao', \Carbon\Carbon::now()->format('Y-m-d'), ['class' => 'form-control'])!!}

                         {!! Form::label('cargofun', 'Cargo') !!}
                        <select name="cargo_id" class="form-control">
                            @foreach($cargos as $cargo)
                                <option value='{!! $cargo->id !!}' >{{ $cargo->cargo_nome }}</option>
                            @endforeach
                        </select>

                        {!! Form::label('setorfun', 'Setor') !!}
                        <select name ="setor_id" class="form-control">
                            @foreach($setores as $setor)
                                <option value= '{!! $setor->id !!}'>{{ $setor->setor_nome }} </option>
                            @endforeach
                        </select>
                            
                        {!!Form::submit('Salvar', ['class' => 'btn btin-primary'])!!}

                   {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="rw-money-mask.min.js"></script>
@endsection