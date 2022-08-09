@extends('layouts.app')

@section('template_title')
    {{ $estudiante->name ?? 'Show Estudiante' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Estudiante</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('estudiantes.index') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                    <div class="form-group">
                            <strong>Id:</strong>
                            {{ $estudiante->id }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario Id:</strong>
                            {{ $estudiante->usuario_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $estudiante->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $estudiante->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Semestre:</strong>
                            {{ $estudiante->semestre }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $estudiante->email }}
                        </div>
                        <div class="form-group">
                            <strong>Genero:</strong>
                            {{ $estudiante->genero }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $estudiante->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Programa:</strong>
                            {{ $estudiante->programa }}
                        </div>
                        <div class="form-group">
                            <strong>Universidad:</strong>
                            {{ $estudiante->universidad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
