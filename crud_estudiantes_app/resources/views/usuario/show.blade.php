@extends('layouts.app')

@section('template_title')
    {{ $usuario->name ?? 'Show Usuario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('usuarios.index') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                    <div class="form-group">
                            <strong>Id:</strong>
                            {{ $usuario->id }}
                        </div>
                        
                        <div class="form-group">
                            <strong>Clave:</strong>
                            {{ $usuario->clave }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $usuario->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $usuario->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $usuario->email }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
