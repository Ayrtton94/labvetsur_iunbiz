<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use App\Models\Lineas;
use App\Models\Categorias;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Productos::where('status', 'VALID')->get();
        $datas = [];

        foreach ($datos as $dato) {
            $datas[] = [
                'id'=> $dato->id,
                'nombre' => $dato->nombre, 
                'linea_id' => $dato->linea_id, 
                'categoria_id' => $dato->categoria_id, 
                'color' => $dato->color, 
                'imagen' => $dato->imagen, 
                'precio' => $dato->precio, 
                'fecha_ini' => $dato->fecha_ini, 
                'status' => $dato->status, 
                'ean' => $dato->ean, 
                'code_father' => $dato->code_father, 
                'code_mother' => $dato->code_mother, 
                'code_son' => $dato->code_son,
            ];            
        }
        return view('producto.index', compact('datas', 'datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lineas = Lineas::get();
        $categorias = Categorias::get();

        return view('producto.create', compact('lineas', 'categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productos_data = request()->except('_token');

        if($request->hasFile('imagen')){

            $productos_data['imagen']=$request->file('imagen')->store('uploads','public');

        }

        Productos::create($productos_data);
        return redirect('producto')->with('info','el producto se creó con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(Productos $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productos = Productos::findOrFail($id);         
        return view('producto.edit',compact('productos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Productos $productos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record = Productos::findOrFail($id);
        $record->update([
            'status'=> 'CANCELED'
        ]);

        return redirect('producto')->with('info','el producto se elimino con éxito');
    }
}
