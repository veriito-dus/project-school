<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TeacherGradeController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\NotasController;
use App\Http\Controllers\NotasPruebaSaberController;
use App\Http\Controllers\GradeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    // return view('teacher/teacher-grade/profile');
    // return view('teacher/notes');
    // return view('navs/teacher');
    return view('login');
});
//profesor
Route::get('/profile', function () {
    return view('teacher/profile');
});
Route::get('/notes', function () {
    return view('teacher/notes');
});
Route::get('/notesaber', function () {
    return view('teacher/notes-saber');
});

//profesor-director
Route::get('/index-teacher-grade', function () {
    return view('teacher/teacher-grade/index');
});
Route::get('/profile-teacher', function () {
    return view('teacher/teacher-grade/profile');
});
Route::get('/grade', function () {
    return view('teacher/teacher-grade/grade');
});
Route::get('/notesgrade', function () {
    return view('teacher/teacher-grade/notes-grade');
});
Route::get('/notesabergrade', function () {
    return view('teacher/teacher-grade/notes-saber-grade');
});
Route::get('/informesabergrade', function () {
    return view('teacher/teacher-grade/informe-notes-saber-grade');
});
Route::get('/graficasabergrade', function () {
    return view('teacher/teacher-grade/grafica-notes-saber-grade');
});

Route::get('/notesdirector', function () {
    return view('teacher/teacher-grade/notes');
});

Route::get('/notesaberdirector', function () {
    return view('teacher/teacher-grade/notes-saber');
});
//admin
Route::get('/administrador', function () {
    return view('admin/index');
});
Route::get('/asignacionag', function () {
    return view('admin/asignacion-ag');
});
Route::get('/asignacionpgm', function () {
    return view('admin/asignacion-pgm');
});
// Route::get('/gradosadmin', function () {
//     return view('admin/grades-admin');
// });
Route::get('/materiaadmin', function () {
    return view('admin/materia-admin');
});
Route::get('/alumnoadmin', function () {
    return view('admin/alumnos/alumnos-admin');
});
Route::get('/addalumnoadmin', function () {
    return view('admin/alumnos/add');
});
Route::get('/teacheradmin', function () {
    return view('admin/teachers/teacher-admin');
});
Route::get('/addteacheradmin', function () {
    return view('admin/teachers/add');
});

Route::get('/prueba', function () {
    return view('prueba/prueba');
});


Route::resource('user',UserController::class);
Route::resource('student',StudentController::class);
Route::resource('teacher',TeacherController::class);
Route::resource('teachergrade',TeacherGradeController::class);
Route::resource('materia',MateriaController::class);//listo
Route::resource('notas',NotasController::class);
Route::resource('notas-pruebas-saber',NotasPruebaSaberController::class);
Route::resource('grado',GradeController::class); //listo
