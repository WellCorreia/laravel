@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cadastrar Cargos

                  <a class ="pull-right" href="{{url('cargos')}}">Listagem de Cargos</a>

                </div>

                <div class="panel-body">
                    @if(Session::has('mensagem_sucesso'))
                        <div class="alert alert-sucess">{{ Session::get('mensagem_sucesso') }}</div>
                    @endif


                    @if(Request::is('*/editar'))
                        {!! Form::model($cargo, ['method' => 'PATCH', 'url' => 'cargos/'.$cargo->id]) !!}
                    @else
                        {!! Form::open(['url' => 'cargos/salvar']) !!}
                    @endif


                        {!! Form::label('nomeCargo', 'Nome') !!}
                        {!! Form::input('text', 'cargo_nome', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Ex: Analista de Sistemas'] ) !!}

                        {!!Form::submit('Salvar', ['class' => 'btn btin-primary'])!!}

                   {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection