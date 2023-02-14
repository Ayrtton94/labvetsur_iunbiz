@if(count($errors)>0)
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach($errors->all() as $error)
                        <li> {{ $error }} </li>
                    @endforeach
                </ul>                
            </div>           
@endif
@if(session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
@endif

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
                                                <th><input type="text" class="form-control" name="code_mother" id="code_mother" placeholder="Código madre"></th>
                                                <th>
                                                    <select class="form-control" aria-label="Default select example" name="status" id="status">
                                                        <option selected hidden>Estado</option>
                                                        <option value="VALID">VALID</option>
                                                        <option value="CANCELED">CANCELED</option>

                                                    </select>
                                                </th>
                                                <th>Fecha de registro</th>
                                                <th><input type="date" class="form-control" name="fecha_ini" id="fecha_ini"></th>
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
                                                <th colspan="3"><input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre de producto"></th>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <select class="form-control" aria-label="Default select example" name="linea_id" id="linea_id">
                                                        <option selected>Linea</option>
                                                        @foreach($lineas as $linea)
                                                            <option value="{{ $linea->id }}">{{ $linea->nombre }}</option>
                                                        @endforeach                                                        
                                                    </select>
                                                </th>
                                                <th>
                                                    <select class="form-control" aria-label="Default select example" name="categoria_id" id="categoria_id">
                                                        <option selected>Categoria</option>
                                                        @foreach($categorias as $categoria)
                                                            <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                                        @endforeach  
                                                    </select>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th><input type="text" class="form-control" name="color" placeholder="Color" id="color"></th>
                                                <th><input type="number" class="form-control" name="precio" placeholder="Precio" id="precio"></th>
                                                <th>
                                                    <input type="file" class="form-control-file" name="imagen" id="imagen" value="imagen" >
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
                                                <td><input type="text" class="form-control" name="ean" placeholder="EAN13" id="ean"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" class="form-control" name="code_son" placeholder="Cod.Hijo" id="code_son"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" class="form-control" name="code_father" placeholder="Cod.Padre" id="code_father"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div><br>
                            <div class="card">
                                <div class="card-body">
                                  <table class="table table-bordered">
                                    <thead>
                                      <tr align="center">
                                        <th><button type="submit" class="btn btn-info">GUARDAR</button></th>
                                        <th><button id="btn-reset" class="btn btn-danger">Limpiar</button></th>
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