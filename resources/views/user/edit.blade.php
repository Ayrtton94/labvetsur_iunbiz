@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>Editar Usuario</h1>
@stop

@section('content')
@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif


    <div class="card">
        <div class="card-body">
            <p class="h5">Nombre:</p>
            <p class="form-control">{{$user->name}}</p>


            <h2 class="h5">Listado de roles</h2>
            <form action="{{ url('/user/'.$user->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                {{method_field('PATCH')}}
                @foreach($roles as $role)
                <div class="form-check">
                    <input  class="form-check-input" type="checkbox" name="roles[]" value="{{$role->id}}">
                    <label class="form-check-label" for="exampleRadios1">
                      {{$role->name}}
                    </label>
                  </div>
                @endforeach

                <button type="submit" class="btn btn-info mt-2">Asignar roles</button>
            </form>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop