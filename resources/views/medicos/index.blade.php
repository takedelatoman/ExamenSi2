@extends('adminlte::page')

@section('title', 'Clinica LOL')

@section('content_header')
    <h1>Medicos</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{route('medicos.create')}}" class="btn btn-primary btb-sm">Añadir Médico</a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table table-striped" id="usuarios" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Área De Desempeño</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Opciones</th>
                        
                    </tr>
                </thead>
               
               
              
               
           
                <tbody>
                    @foreach ($medicos as $medico)
                        <tr>
                            <td>{{$medico->id}}</td>
                            <td>{{$medico->nombre}}</td>
                            <td>{{$medico->direccion}}</td>
                            <td>{{$medico->area_desemp}}</td>
                            <td>{{$medico->telefono}}</td>
                          
                            <td>
                                <form action="{{route('medicos.destroy', $medico)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <a href="{{route('medicos.edit', $medico)}}" class="btn btn-primary btn-sm">Editar<a>
                                    @can('editar medico')
                                    @endcan
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('¿ESTÁ SEGURO DE BORRAR?')" value="Borrar">Eliminar</button> 
                                    @can('eliminar medico')
                                    @endcan
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
        $('#usuarios').DataTable();
        } );
    </script> 
@stop