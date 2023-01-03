<?php

namespace App\Http\Controllers;

use App\Models\imagen;
use App\Http\Requests\StoreimagenRequest;
use App\Http\Requests\UpdateimagenRequest;

class ImagenController extends Controller
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
     * @param  \App\Http\Requests\StoreimagenRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreimagenRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\imagen  $imagen
     * @return \Illuminate\Http\Response
     */
    public function show(imagen $imagen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\imagen  $imagen
     * @return \Illuminate\Http\Response
     */
    public function edit(imagen $imagen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateimagenRequest  $request
     * @param  \App\Models\imagen  $imagen
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateimagenRequest $request, imagen $imagen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\imagen  $imagen
     * @return \Illuminate\Http\Response
     */
    public function destroy(imagen $imagen)
    {
        //
    }
}
