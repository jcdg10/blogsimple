@extends('layouts.app')
     
@section('stylesheet')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet"/>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">ENTRADA - MODIFICAR</div>

                    <div class="card-body">
                        {!! Form::open(['route' => ['entradas.update', $entrada->id], 'method' => 'put']) !!}

                        <div class="form-group @if($errors->has('title')) has-error @endif">
                            {!! Form::label('Título') !!}
                            {!! Form::text('titulo', $entrada->titulo, ['class' => 'form-control', 'placeholder' => 'Título']) !!}
                            @if ($errors->has('titulo'))
                                <span style="color: red;">{!! $errors->first('titulo') !!}</span>@endif
                        </div>

                        <div class="form-group @if($errors->has('contenido')) has-error @endif">
                            {!! Form::label('Contenido') !!}
                            {!! Form::textarea('contenido', $entrada->contenido, ['class' => 'form-control', 'placeholder' => 'Contenido']) !!}
                            @if ($errors->has('contenido'))
                                <span style="color: red;">{!! $errors->first('contenido') !!}</span>@endif
                        </div>

                        {!! Form::submit('Modificar entrada',['class' => 'btn btn-sm btn-warning']) !!}
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

    <script>
        $(document).ready(function () {
            CKEDITOR.replace('contenido');
        });
    </script>
@endsection
