<?php

namespace App\Http\Controllers;

use App\Models\TeacherModel;
use Illuminate\Http\Request;
/**
* controlador profesores
* muestra los procesos que se realizaran para los profesores
* 
* @author    Veronica Lisseth Dussan Parra
* @since     22 de septiembre del 2021
*/
class TeacherController extends Controller
{
    /**
     * muestra la pagina principal de los profesores
     */
    public function index()
    {
        return view('teacher/index');
    }
    public function perfil()
    {
        return view('teacher/profile');
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
     * @param  \App\Models\TeacherModel  $teacherModel
     * @return \Illuminate\Http\Response
     */
    public function show(TeacherModel $teacherModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TeacherModel  $teacherModel
     * @return \Illuminate\Http\Response
     */
    public function edit(TeacherModel $teacherModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TeacherModel  $teacherModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeacherModel $teacherModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TeacherModel  $teacherModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeacherModel $teacherModel)
    {
        //
    }

}
