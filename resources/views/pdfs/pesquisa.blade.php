@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Gerar Relatório

                  <a class ="pull-right" href="{{url('home')}}">Home</a>

                </div>

                <div class="panel-body">

                   
                        {!! Form::open(['url' => 'pdfs/gerapdf']) !!}
                
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
                            
                        {!!Form::submit('Gerar', ['class' => 'btn btin-primary'])!!}

                   {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="rw-money-mask.min.js"></script>
@endsection