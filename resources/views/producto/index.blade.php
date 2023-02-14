@extends('adminlte::page')

@section('title', 'Productos')

@section('content_header')
    <h1>Lista de Productos</h1>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
@stop

@section('content')
<main class="discussion-mp">
<div class="card">
                <div class="card-body">
                    <a href="/producto/create" class="btn btn-success">Nuevo producto</a>
                </div>
            </div>                       

            <br>
            <div class="card">
                <div class="card-header">Lista de Productos</div>
                <div class="card-body table-responsive">
                    <table class="table" id="producto">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Codigo Madre</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Color</th>
                                <th scope="col">EAN</th>
                                <th scope="col">Codigo hijo smart</th>
                                <th scope="col">Codigo padre smart</th>
                                <th>Acciones</th>   
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas as $producto)
                            <tr>
                                <th scope="row">{{ $producto['id']}}</th>
                                <td class="text-center">
                                    <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$producto['imagen'] }}" width="500" alt="500"> 
                                </td>
                                <td>{{ $producto['code_mother']}}</td>
                                <td>{{ $producto['precio']}}</td>
                                <td>{{ $producto['color']}}</td>
                                <td>{{ $producto['ean']}}</td>
                                <td>{{ $producto['code_son']}}</td>
                                <td>{{ $producto['code_father']}}</td>
                                <td>
                                    <a href="{{ url('/producto/'.$producto['id'].'/edit') }}" class="btn btn-warning">
                                        Editar
                                    </a>
                                    <form action="{{ url('/producto/'.$producto['id'] ) }}" class="d-inline" method="post">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <input type="submit" onclick="return confirm('¿Quieres borrar?')" class="btn btn-danger" value="Borrar"> 
                                    </form>
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
        $('#producto').DataTable();
    </script>
@stop
