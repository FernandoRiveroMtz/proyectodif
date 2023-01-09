<?php

namespace App\Http\Controllers;

use App\Models\tipo_publicacion;
use App\Http\Requests\Storetipo_publicacionRequest;
use App\Http\Requests\Updatetipo_publicacionRequest;

class TipoPublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\Storetipo_publicacionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storetipo_publicacionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tipo_publicacion  $tipo_publicacion
     * @return \Illuminate\Http\Response
     */
    public function show(tipo_publicacion $tipo_publicacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tipo_publicacion  $tipo_publicacion
     * @return \Illuminate\Http\Response
     */
    public function edit(tipo_publicacion $tipo_publicacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatetipo_publicacionRequest  $request
     * @param  \App\Models\tipo_publicacion  $tipo_publicacion
     * @return \Illuminate\Http\Response
     */
    public function update(Updatetipo_publicacionRequest $request, tipo_publicacion $tipo_publicacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tipo_publicacion  $tipo_publicacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(tipo_publicacion $tipo_publicacion)
    {
        //
    }
}
