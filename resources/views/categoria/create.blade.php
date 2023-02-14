@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categoria</div>

                <div class="card-body">
                    <form action="{{ url('/categoria') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @include('categoria.form')     
                    </form>                   
                </div>
            </div>
        </div>
    </div>
</div>


@endsection