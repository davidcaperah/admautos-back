<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculo;
class VehiculosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Vehiculo::all();
        return $data; 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $data = new Vehiculo();
        $data->Nombres = $request->Nombres; 
        $data->Apellidos = $request->Apellidos; 
        $data->DNI = $request->DNI; 
        $data->placa = $request->placa; 
        $data->Tipo_v = $request->Tipo_v; 
        $data->Fecha_e = $request->Fecha_e;
        $data->Fecha_s = $request->Fecha_s; 
        $data->H_Entrada = $request->H_Entrada; 
        $data->H_Salida = $request->H_Salida; 
        $data->p_p = $request->p_p; 

        $data->save();
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
    //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = Vehiculo::findOrFail($request->id);
        $data = new Vehiculo();
        $data->Nombres = $request->Nombres; 
        $data->Apellidos = $request->Apellidos; 
        $data->DNI = $request->DNI; 
        $data->placa = $request->placa; 
        $data->Tipo_v = $request->Tipo_v; 
        $data->Fecha_e = $request->Fecha_e;
        $data->Fecha_s = $request->Fecha_s; 
        $data->H_Entrada = $request->H_Entrada; 
        $data->H_Salida = $request->H_Salida; 
        $data->p_p = $request->p_p; 

        $data->save();
        return $data;
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Vehiculo::destroy($request->id);
    }
}
