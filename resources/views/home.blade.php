@extends('adminlte::page')

@section('title', 'Clinica TAKE')

@section('content_header')
<h1>CLINICA LOL</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h1 class="card-title">MISIÓN</h1>
    </div>

    <div class="card-body">
        <p>Satisfacer de manera eficaz y eficiente las necesidades de cuidado de salud de la comunidad.
            Brindar a toda la comunidad la mejor atención medica basada en la evidencia científica y contenido ético, acompañando al paciente y su familia.</p>
    </div>

</div>

<div style="width: 6rem; display: flexbox; justify-content: center;" >
    <img style="margin-left: 20rem" width="400rem" src="https://img.freepik.com/vector-gratis/ilustracion-clinica-doctor_1270-69.jpg?w=740&t=st=1651296820~exp=1651297420~hmac=2a33653179ee870d9f8d379c112b54c46cafc674c49a2c8fa0213382f44158d9" alt="">
</div>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>console.log('hi!')</script>
@stop