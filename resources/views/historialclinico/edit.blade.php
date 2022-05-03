@extends('adminlte::page')

@section('title', 'Clinica LOL')

@section('content_header')
    <h1>Registrar Historia Clinica</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            <form action="{{ route('historialesclinicos.update', $historia) }}" method="post">
                @csrf
                @method('put')
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
                        <textarea type="text" name="ocupacion" class="form-control" value="" required>{{ $historia->ocupacion }}</textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="enfermedad_actual">Ingresar enfermedad_actual</label>
                        <textarea type="text" name="enfermedad_actual" class="form-control" value=""
                            required>{{ $historia->enfermedad_actual }}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="alergias">Ingresar alergias</label>
                        <textarea type="text" name="alergias" class="form-control" value="" required>{{ $historia->alergias }}</textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="enfermedad_herencia">Ingresar enfermedad_herencia</label>
                        <textarea type="text" name="enfermedad_herencia" class="form-control" value=""
                            required>{{ $historia->enfermedad_herencia }}</textarea>
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="tipo_sangre">Ingresar tipo_sangre</label>
                    <textarea type="text" name="tipo_sangre" class="form-control" value=""
                        required>{{ $historia->tipo_sangre }}</textarea>
                </div>
                <div class="col-md-6">
                    <label for="tabaquismo">Ingresar tabaquismo</label>
                    <textarea type="text" name="tabaquismo" class="form-control" value=""
                        required>{{ $historia->tabaquismo }}</textarea>
                </div>
               </div>

            </div>

            <div class="col-md-6">
                <label for="alcoholismo">Ingresar alcoholismo</label>
                <textarea type="text" name="alcoholismo" class="form-control" value=""
                    required>{{ $historia->alcoholismo }}</textarea>
            </div>
            <div class="col-md-6">
                <label for="drogodependencias">Ingresar drogodependencias</label>
                <textarea type="text" name="drogodependencias" class="form-control" value=""
                    required>{{ $historia->drogodependencias }}</textarea>
            </div>
           </div>

        <br>


















        <div class="form-group">
            <button class="btn btn-primary" type="submit" value="required">Actualizar Historia</button>
            <a class="btn btn-danger" href="{{ route('historialesclinicos.index') }}">Volver</a>
        </div>

        </form>
        <br>
        {{-- <h3>Documentos Clinicos :</h3>



        <div class="card-body">
            <table class="table table-striped table-bordered shadow-lg mt-4" id="historias">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Documento Descripcion</th>

                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($documentos as $doc)
                        @if ($doc->id_historia == $historia->id)
                            <tr>

                                <td>{{ $doc->id }}</td>
                                <td>{{ $doc->descripcion }}</td>


                                <td>
                                    <a class="btn btn-warning btn-sm" style="margin-top: 5px"
                                        href="{{ Storage::disk('s3')->url($doc->url) }}"><i class="fas fa-eye"></i>
                                        Ver </a>
                                    <a class="btn btn-primary btn-sm" style="margin-top: 5px"
                                        href="{{ route('documentos.show', $doc) }}" download="{{ $doc->nombre }}">
                                        Descargar Archivo</a>
                                    <form action="{{ url('historias/elim_archivo', $doc) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button class="btn btn-danger btn-sm" style="margin-top: 0.35rem"><i
                                                class="fas fa-trash"></i>
                                            Eliminar</button>

                                    </form>

                                </td>

                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>

        </div> --}}
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

@stop

@section('js')

@stop
