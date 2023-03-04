<?php

namespace App\Http\Controllers;

use App\Models\solicitud_ticket;
use Illuminate\Http\Request;

class SolicitudTicketController extends Controller
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
    public function create(Request $request)
    {
        //
        $sT = new solicitud_ticket();
        $sT->titulo = $request->input('titulo');
        $sT->descripcion = $request->input('descripcion');
        $sT->direccion = $request->input('titulo');
        $sT->zona = $request->input('zona');
        $sT->estado = 'Activo';
        $sT->correo = $request->input('email');
        $sT->telefono = $request->input('telefono');

        $sT->save();

        return view('inicio/index')->with('exito', 'Se ha registrado su solicitud, revise su correo para la confirmacion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\solicitud_ticket  $solicitud_ticket
     * @return \Illuminate\Http\Response
     */
    public function show(solicitud_ticket $solicitud_ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\solicitud_ticket  $solicitud_ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(solicitud_ticket $solicitud_ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\solicitud_ticket  $solicitud_ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, solicitud_ticket $solicitud_ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\solicitud_ticket  $solicitud_ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(solicitud_ticket $solicitud_ticket)
    {
        //
    }
}
