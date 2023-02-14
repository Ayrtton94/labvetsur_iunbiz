@extends('adminlte::page')

@section('title', 'User')

@section('content_header')
    <h1>Lista de Usuarios</h1>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <a href="/user/create" class="btn btn-success">Nuevo Usuario</a>
    </div>
</div>                       

<br>
<div class="card">
    <div class="card-header">Lista de Productos</div>
    <div class="card-body table-responsive">
        <table class="table" id="usuario">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th>Acciones</th>   
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ url('/user/'.$user['id'].'/edit') }}" class="btn btn-warning">
                            Editar
                        </a>                                                  
                    </td>
                </tr>                      
                @endforeach                                      
            </tbody>
        </table>
    </div>
</div>
@stop

@section('js')
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $('#usuario').DataTable();
    </script>
@stop