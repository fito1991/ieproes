@extends('layouts.app')

@section('template_title')
    {{ $nota->name ?? "{{ __('Show') Nota" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Nota</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('notas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <strong>ID Alumno:</strong>
                            {{ $nota->alumno_id }}
                        </div>
                        <div class="form-group">
                            <strong>ID Materia:</strong>
                            {{ $nota->materia_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Alumno:</strong>
                            {{ $nota->alumno->name }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Materia:</strong>
                            {{ $nota->materia->name }}
                        </div>
                        <div class="form-group">
                            <strong>Nota 1:</strong>
                            {{ $nota->nota_1 }}
                        </div>
                        <div class="form-group">
                            <strong>Nota 2:</strong>
                            {{ $nota->nota_2 }}
                        </div>
                        <div class="form-group">
                            <strong>Nota 3:</strong>
                            {{ $nota->nota_3 }}
                        </div>
                        <div class="form-group">
                            <strong>Promedio:</strong>
                            {{ $nota->promedio }}
                        </div>
                        <!-- <div class="form-group">
                            <strong>Profesor Id:</strong>
                            {{ $nota->profesor_id }}
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
