@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cadastrar Setores

                  <a class ="pull-right" href="{{url('setores')}}">Listagem de Setores</a>

                </div>

                <div class="panel-body">
                    @if(Session::has('mensagem_sucesso'))
                        <div class="alert alert-sucess">{{ Session::get('mensagem_sucesso') }}</div>
                    @endif


                    @if(Request::is('*/editar'))
                        {!! Form::model($setor, ['method' => 'PATCH', 'url' => 'setores/'.$setor->id]) !!}
                    @else
                        {!! Form::open(['url' => 'setores/salvar']) !!}
                    @endif


                        {!! Form::label('nomeSetor', 'Nome') !!}
                        {!! Form::input('text', 'setor_nome', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Ex: Informática'] ) !!}

                        {!!Form::submit('Salvar', ['class' => 'btn btin-primary'])!!}

                   {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection