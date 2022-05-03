@extends('adminlte::page')

@section('title', 'Clinica LOL')

@section('content_header')
    <h1>Registrar Historia Clinica</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            <form action="{{ route('historialesclinicos.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <h2>Ficha de Identificación</h2>

                <div class="row">
                    <div class="col-md-12">
                        <label for="estado">Ingresar Paciente</label>
                        <select name="id_paciente" class="focus border-primary  form-control">
                            @foreach ($pacientes as $paciente)
                                <option value="{{ $paciente->id }}">{{ $paciente->Nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <label for="estado">Ingresar Medico</label>
                        <select name="id_medico" class="focus border-primary  form-control">
                            @foreach ($medicos as $medico)
                                <option value="{{ $medico->id }}">{{ $medico->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>




                <div class="row">
                    <div class="col-md-6">
                        <label for="ocupacion">Ingresar ocupacion</label>
                        <textarea type="text" name="ocupacion" class="form-control" value="" required></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="enfermedad_actual">Ingresar enfermedad_actual</label>
                        <textarea type="text" name="enfermedad_actual" class="form-control" value="" required></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="alergias">Ingresar alergias</label>
                        <textarea type="text" name="alergias" class="form-control" value="" required></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="enfermedad_herencia">Ingresar enfermedad_herencia</label>
                        <textarea type="text" name="enfermedad_herencia" class="form-control" value="" required></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label for="tipo_sangre">Ingresar tipo_sangre</label>
                        <input type="text" name="tipo_sangre" class="form-control" value="" required>
                    </div>
                    <div class="col-md-6">
                        <label for="tabaquismo">Ingresar tabaquismo</label>
                        <input type="text" name="tabaquismo" class="form-control" value="" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="alcoholismo">Ingresar alcoholismo</label>
                        <input type="text" name="alcoholismo" class="form-control" value="" required>
                    </div>
                    <div class="col-md-6">
                        <label for="drogodependencias">Ingresar drogodependencias</label>
                        <input type="text" name="drogodependencias" class="form-control" value="" required>
                    </div>
                </div>
                <br>









                <div class="form-group">
                    <button class="btn btn-primary" type="submit" value="required">Añadir Historia</button>
                    <a class="btn btn-danger" href="{{ route('historialesclinicos.index') }}">Volver</a>
                </div>

            </form>

        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

@stop

@section('js')

@stop
