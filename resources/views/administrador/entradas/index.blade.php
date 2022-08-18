@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                @if(Session::has('message'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        {{ Session('message') }}
                    </div>
                @endif

                @if(Session::has('delete-message'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        {{ Session('delete-message') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Entradas - lista
                        <a href="{{ route('entradas.create') }}" class="btn btn-sm btn-primary float-right">Agregar
                            entrada</a>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered mb-0">
                            <thead>
                            <tr>
                                <th scope="col" width="20">ID</th>
                                <th scope="col" width="320">Título</th>
                                <th scope="col" width="240">Autor</th>
                                <th scope="col" width="40">Acciones</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($entradas as $entrada)
                                <tr>
                                    <td>{{ $entrada->entradas_id }}</td>
                                    <td>{{ $entrada->titulo }}</td>
                                    <td>{{ $entrada->name }}</td>
                                    <td>
                                        <a href="{{ route('entradas.edit', $entrada->entradas_id) }}"
                                           class="btn btn-sm btn-primary">Modificar</a>
                                        {!! Form::open(['route' => ['entradas.destroy', $entrada->entradas_id], 'method' => 'delete', 'style' => 'display:inline']) !!}
                                        {!! Form::submit('Eliminar', ['class' => 'btn btn-sm btn-danger']) !!}
                                        {!! Form::close() !!}
                                    </td>
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
