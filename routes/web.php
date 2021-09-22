<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\NotasController;
use App\Http\Controllers\NotasPruebaSaberController;

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
    return view('login');
});

Route::resource('user',UserController::class);
Route::resource('student',StudentController::class);
Route::resource('teacher',TeacherController::class);
Route::resource('subject',SubjectController::class);
Route::resource('notas',NotasController::class);
Route::resource('notas-pruebas-saber',NotasPruebaSaberController::class);
