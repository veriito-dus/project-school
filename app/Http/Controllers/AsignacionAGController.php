<?php

namespace App\Http\Controllers;

use App\Models\AsignacionAG;
use App\Models\Estudiante;
use App\Models\Grade;
use Illuminate\Http\Request;

/**
 * Controlador Estudiantes
 * Procesos que se realizaran sobre los estudiantes de la institución
 * 
 * @author    Veronica Lisseth Dussan Parra
 * @since     09 de noviembre del 2021
 */

class AsignacionAGController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asignacionAG = AsignacionAG::all();
        $estudiantes = Estudiante::all();
        $grados = Grade::all();
        return view('prueba.prueba', compact('estudiantes', 'grados', 'asignacionAG'));
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
        $datosasignacionAG = request()->except('_token');
        AsignacionAG::insert($datosasignacionAG);
        return redirect('asginacionAG');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AsignacionAG  $asignacionAG
     * @return \Illuminate\Http\Response
     */
    public function show(AsignacionAG $asignacionAG)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AsignacionAG  $asignacionAG
     * @return \Illuminate\Http\Response
     */
    public function edit(AsignacionAG $asignacionAG)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AsignacionAG  $asignacionAG
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AsignacionAG $asignacionAG)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AsignacionAG  $asignacionAG
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $empleado=Grade::findOrFail($id);
        AsignacionAG::destroy($id);
        return redirect('asginacionAG');
    }
}
