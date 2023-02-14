@extends('adminlte::page')

@section('content')

<div class="container">
    <br>
    <form action="{{ url('/producto') }}" method="post" enctype="multipart/form-data">
        @csrf
        @include('producto.form')     
    </form> 
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        $("#btn-reset").on("click", function(e) {
            // Cancelar comportamiento normal del botón
            e.preventDefault();
            $('#code_mother').val('');
            $('#fecha_ini').val('');
            $('#status').val('Estado');
            $('#nombre').val('');
            $('#linea_id').val('Linea');
            $('#categoria_id').val('Categoria');
            $('#color').val('');
            $('#precio').val('');
            $('#ean').val('');
            $('#code_son').val('');
            $('#code_father').val('');
        });
    </script>
@stop
