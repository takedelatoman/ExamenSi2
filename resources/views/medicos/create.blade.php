@extends('adminlte::page')

@section('title', 'Clinica LOL')

@section('content_header')
    <h1>Registrar Medico</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        
        
        
 
     
            <form action="{{route('medicos.store')}}" method="post" >
                @csrf
                <label for="nombre">Ingrese el nombre del Medico</label>
                <input type="text" name="nombre" class="form-control" value="" required>
                
                <br>
                <label for="direccion">Ingrese la dirección</label>
                <input type="text" name="direccion" class="form-control" value="" required>
                
                
                <br>
                <label for="area_desemp">Ingrese el area de Desempeño</label>
                <input type="text" name="area_desemp" class="form-control" value="" required>
                

                <label for="telefono">Ingrese el Teléfono</label>
                <input type="number" name="telefono" class="form-control" value="" required>
                
                <label for="email">Ingrese el email</label>
                <input type="text" name="email" class="form-control" value="" required>
                
                <label for="password">Ingrese la contraseña</label>
                <input type="password" name="password" class="form-control" value="" required>
                <br>

              
                <br>

                <button  class="btn btn-danger btn-sm" type="submit">Crear Usuario</button>
                <a class="btn btn-primary btn-sm" href="{{route('users.index')}}">Volver</a>
            </form>

    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', cargar, false);
    var rol = document.getElementById('select-roles');
    var empleados = document.getElementById('select-empleados');
    function habilitar(){
        if(rol.value > 0){
            empleados.disabled = false
        }else{
            empleados.disabled = true
            empleados.value = 0
        }
    }
    function cargar(){
        if(rol.value > 0){
            empleados.disabled = false
        }else{
            empleados.disabled = true
            empleados.value = 0
        }
    }
    
</script>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop