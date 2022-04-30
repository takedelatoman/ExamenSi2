@extends('adminlte::page')

@section('title', 'Clinica LOL')

@section('content_header')
    <h1>Registrar Paciente</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        
       
        
 
     
            <form action="{{route('pacientes.store')}}" method="post" >
                @csrf

                <label for="ci">Ingrese el CI</label>
                <input type="number" name="ci" class="form-control" value="" required>


                <label for="nombre">Ingrese el nombre del Paciente</label>
                <input type="text" name="nombre" class="form-control" value="" required>
                
                <br>
                <label for="fecha_Nac">Ingrese la Fecha de Nacimiento</label>
                <input type="date" name="fecha_Nac" class="form-control" value="" required>
                
                <label for="email">Ingrese el email</label>
                <input type="text" name="email" class="form-control" value="" required>

                <br>
                <div class="form-group">
                    <label for="sexo">Ingresa el Sexo</label>
                    <select name="sexo"  class="focus border-primary  form-control">
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                            
                    </select>
                </div>

                

                <label for="telefono">Ingrese el Teléfono</label>
                <input type="number" name="telefono" class="form-control" value="" required>
                
             
                
                

                <button  class="btn btn-danger btn-sm" type="submit">Crear Usuario</button>
                <a class="btn btn-primary btn-sm" href="{{route('pacientes.index')}}">Volver</a>
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