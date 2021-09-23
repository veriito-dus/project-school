<?php

namespace App\Http\Controllers;

use App\Models\NotasModel;
use Illuminate\Http\Request;

class NotasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'Si guenas aca desde el index de las notas Controlador';
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NotasModel  $notasModel
     * @return \Illuminate\Http\Response
     */
    public function show(NotasModel $notasModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NotasModel  $notasModel
     * @return \Illuminate\Http\Response
     */
    public function edit(NotasModel $notasModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NotasModel  $notasModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NotasModel $notasModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NotasModel  $notasModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(NotasModel $notasModel)
    {
        //
    }
}
