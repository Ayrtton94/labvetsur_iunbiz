@extends('adminlte::page')

@section('title', 'Linea')

@section('content_header')
    <h1>Lista de Lineas</h1>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
@stop

@section('content')
<main class="discussion-mp">
    <div class="card">
        <div class="card-body">
            <a href="/linea/create" class="btn btn-success">Nueva Linea</a>
        </div>
    </div>                       
    
    <br>
    <div class="card">
        <div class="card-header">Lista de Productos</div>
        <div class="card-body table-responsive">
            <table class="table" id="linea">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripcion</th>
                        <th>Acciones</th>   
                    </tr>
                </thead>
                <tbody>
                    @foreach($datos as $linea)
                    <tr>
                        <th scope="row">{{ $linea['id']}}</th>
                        <td>{{ $linea['nombre']}}</td>
                        <td>{{ $linea['descripcion']}}</td>
                        <td>
                            <a href="{{ url('/linea/'.$linea['id'].'/edit') }}" class="btn btn-warning">
                                Editar
                            </a>                                                  
                        </td>
                    </tr>
                    @endforeach                                        
                </tbody>
            </table>
        </div>
    </div>
</main>
@stop

@section('js')
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $('#linea').DataTable();
    </script>
@stop
