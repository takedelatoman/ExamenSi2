@extends('adminlte::page')

@section('title', 'Clinica LOL')

@section('content_header')
    <h1>Lista Historias Clinicas</h1>
@stop
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
    <div class="card">
        <div class="card-header">

            <a class="btn btn-primary" href="{{ route('historialesclinicos.create') }}">Registrar Historia</a>

        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered shadow-lg mt-4" id="historias">
                <thead>
                    <tr>



                        <th>Id</th>
                        <th>Médicos</th>
                        <th>Paciente</th>
                        <th>Opciones</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($historialesclinicos as $historialclinico)
                        <tr>
                            <td>{{ $historialclinico->id }}</td>

                            @foreach ($medicos as $medico)
                               @if($historialclinico->Id_medico == $medico->id)
                                    <td>{{ $medico->nombre }}</td>
                               @endif
                            @endforeach

                            @foreach ($pacientes as $paciente)
                                @if ($historialclinico->Id_paciente == $paciente->id)
                                    <td>{{ $paciente->Nombre }}</td>
                                @endif
                            @endforeach


                            <td>


                                <form action="{{ route('historialesclinicos.destroy', $historialclinico) }}" method="POST">
                                    @csrf
                                    @method('delete')

                                    <button class="btn btn-danger btn-sm" style="margin-top: 0.35rem"
                                        onclick="return confirm('¿ESTÁ SEGURO DE BORRAR?')" value="Borrar"><i
                                            class="fas fa-trash"></i> Eliminar</button>

                                </form>



                                <a class="btn btn-primary btn-sm" style="margin-top: 5px"
                                    href="{{ route('historialesclinicos.edit', $historialclinico->id) }}"><i
                                        class="fas fa-pencil-alt"></i> Editar</a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@stop

@section('js')
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $('#historialclinico').DataTable({
            autoWidth: false
        });
    </script>
@endsection
