<?php

namespace App\Http\Controllers;

use App\Models\TeacherGradeModel;
use Illuminate\Http\Request;

class TeacherGradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('teacher/teacher-grade/index');
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
     * @param  \App\Models\TeacherGradeModel  $teacherGradeModel
     * @return \Illuminate\Http\Response
     */
    public function show(TeacherGradeModel $teacherGradeModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TeacherGradeModel  $teacherGradeModel
     * @return \Illuminate\Http\Response
     */
    public function edit(TeacherGradeModel $teacherGradeModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TeacherGradeModel  $teacherGradeModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeacherGradeModel $teacherGradeModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TeacherGradeModel  $teacherGradeModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeacherGradeModel $teacherGradeModel)
    {
        //
    }
}
