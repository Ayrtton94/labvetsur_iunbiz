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

<div class="form-group">
    <label for="Nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" class="form-control">
</div><br>
<div class="form-group">
    <label for="descripcion">Descripcion</label>
    <textarea class="form-control" name="descripcion" id="descripcion"></textarea>
</div>
<br>
<input class="btn btn-success" type="submit" value="Guardar">