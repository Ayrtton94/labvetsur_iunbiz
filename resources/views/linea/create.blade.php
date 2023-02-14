@extends('adminlte::page')

@section('content_header')
    <h1>Linea create</h1>
@stop


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('/linea') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @include('linea.form')     
                    </form>                   
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
