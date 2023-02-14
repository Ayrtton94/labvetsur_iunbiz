@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="container">
    <form action="{{ url('/producto/'.$productos->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <main class="discussion-mp">
            <div class="main-section">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-lg-10 col-md-10">
                            <div class="card">
                                <h5 class="card-header">Registro de Productos</h5>
                                <div class="card-body">
        
                                    <div class="card">
                                        <div class="card-body">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th><input type="text" class="form-control" name="code_mother" placeholder="Código madre"></th>
                                                        <th>
                                                            <select class="form-control" aria-label="Default select example" name="status">
                                                                <option selected hidden>Estado</option>
                                                                <option value="VALID">VALID</option>
                                                                <option value="CANCELED">CANCELED</option>
        
                                                            </select>
                                                        </th>
                                                        <th>Fecha de registro</th>
                                                        <th><input type="date" class="form-control" name="fecha_ini"></th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div><br>
        
                                    <div class="card">
                                        <div class="card-body">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th colspan="3"><input type="text" class="form-control" name="nombre" placeholder="Nombre de producto"></th>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            <select class="form-control" aria-label="Default select example" name="linea_id">
                                                                <option selected>Linea</option>                                                        
                                                            </select>
                                                        </th>
                                                        <th>
                                                            <select class="form-control" aria-label="Default select example" name="categoria_id">
                                                                <option selected>Categoria</option>
                                                            </select>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th><input type="text" class="form-control" name="color" placeholder="Color"></th>
                                                        <th><input type="number" class="form-control" name="precio" placeholder="Precio"></th>
                                                        <th>
                                                            <input type="file" class="form-control-file" name="imagen" id="imagen" value="imagen">
                                                        </th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="card">
                                        <div class="card-body">
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td><input type="text" class="form-control" name="ean" placeholder="EAN13"></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="text" class="form-control" name="code_son" placeholder="Cod.Hijo"></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="text" class="form-control" name="code_father" placeholder="Cod.Padre"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <br>

                                    <div class="card">
                                        <div class="card-body">
                                          <table class="table table-bordered">
                                            <thead>
                                              <tr align="center">
                                                <th><button type="submit" class="btn btn-info">GUARDAR</button></th>
                                                <th><a href="/producto" class="btn btn-secondary">VOLVER</a></th>
                                              </tr>
                                            </thead>
                                          </table>
                                        </div>
                                      </div> 
                                      
                                </div>
                            </div>                                                 
                        </div>
                    </div>
                </div>
            </div>
          </main>    
    </form> 
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop