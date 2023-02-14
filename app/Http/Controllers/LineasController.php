<?php

namespace App\Http\Controllers;

use App\Models\Lineas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LineasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Lineas::get();
        return view('linea.index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('linea.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(['nombre' => $request->get('nombre')], [
            'nombre' => ' required|string|max:100|unique:lineas',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', 'la linea ya existe');
        }

        $linea_data = request()->except('_token');
        Lineas::create($linea_data);
        return redirect('linea')->with('info','La linea se creó con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lineas  $lineas
     * @return \Illuminate\Http\Response
     */
    public function show(Lineas $lineas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lineas  $lineas
     * @return \Illuminate\Http\Response
     */
    public function edit(Lineas $lineas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lineas  $lineas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lineas $lineas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lineas  $lineas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lineas $lineas)
    {
        //
    }
}
