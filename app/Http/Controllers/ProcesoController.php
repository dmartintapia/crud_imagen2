<?php

namespace App\Http\Controllers;

use App\Models\Proceso;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class ProcesoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['procesos']=Proceso::paginate(5);
        return view('proceso.index',$datos);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proceso.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        $campos=[
            'idPersona'=>'required|string|max:100',
            'caratula'=>'required|string|max:100',
            'tipoProceso'=>'required|string|max:100',
            'numeroCarpeta'=>'required|string|max:100',
            'imagen'=>'required|max:1000|mimes:jpeg,png,jpg',
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido',
            'numeroCarpeta.required'=>'La Carpeta es requerida',
            'imagen.required'=>'La Foto es requerida'
        ];

        $this->validate($request,$campos,$mensaje);


        $datosProceso = request()->except('_token');

        if($request->hasFile('imagen')){
            $datosProceso['imagen']=$request->file('imagen')->store('uploads','public');
        }


        Proceso::insert($datosProceso);

        //return response()->json($datosProceso);
        return redirect('proceso')->with('mensaje','Proceso agregado con exito');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proceso  $proceso
     * @return \Illuminate\Http\Response
     */
    public function show(Proceso $proceso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proceso  $proceso
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proceso = Proceso::findOrFail($id);
        return view('proceso.edit',compact('proceso'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proceso  $proceso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {          

        $campos=[
            'idPersona'=>'required|string|max:100',
            'caratula'=>'required|string|max:100',
            'tipoProceso'=>'required|string|max:100',
            'numeroCarpeta'=>'required|string|max:100'
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido',
            'numeroCarpeta.required'=>'La Carpeta es requerida',
            
        ];

        if($request->hasFile('imagen')){
            $campos=['imagen'=>'required|max:1000|mimes:jpeg,png,jpg'];
            $mensaje=['imagen.required'=>'La Foto es requerida'];
        }

        $this->validate($request,$campos,$mensaje);



        $datosProceso = request()->except(['_token','_method']);

        if($request->hasFile('imagen')){
            $proceso = Proceso::findOrFail($id);

            Storage::delete('public/'.$proceso->imagen);

            $datosProceso['imagen']=$request->file('imagen')->store('uploads','public');
        }


        Proceso::where('id','=',$id)->update($datosProceso);

        $proceso = Proceso::findOrFail($id);

        //return view('proceso.edit',compact('proceso'));
        //
        return redirect('proceso')->with('mensaje','Proceso editado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proceso  $proceso
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proceso = Proceso::findOrFail($id);
        if(Storage::delete('public/'.$proceso->imagen)){
            Proceso::destroy($id);
        }

       
        //return redirect('proceso');
        return redirect('proceso')->with('mensaje','Proceso borrado con exito');
        //
    }
}
