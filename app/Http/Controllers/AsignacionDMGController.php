<?php

namespace App\Http\Controllers;

use App\Models\AsignacionDMG;
use App\Models\Grade;
use App\Models\Materia;
use App\Models\Profesor;

use Illuminate\Http\Request;

/**
 * Controlador Asignacion profesor - materia - grado
 * Procesos que se realizaran sobre los las asignaciones entre los profesores,
 * las materias y los grados de la institución
 * 
 * @author    Veronica Lisseth Dussan Parra
 * @since     09 de noviembre del 2021
 */

class AsignacionDMGController extends Controller
{
    /**
     * Enlista las los profesores,las materias, los grados y las asignaciones
     * que se tiene en la base de datos y los muestra en la vista asignacion-pgm
     */
    public function index()
    {
        $asignacionDMG = AsignacionDMG::all();
        $grados = Grade::all();
        $materias = Materia::all();
        $profesores = Profesor::all();
        return view('admin.asignacion-pgm', compact('asignacionDMG', 'grados', 'materias','profesores'));
    }

    /**
     * Agrega los datos que vienen de la vista asignacion-pgm en la tabla correspondiente de la base de datos
     * exceptuando el token, después de guardar esos datos se redirecciona a la vista asignacion-pgm
     */
    public function store(Request $request)
    {
        $datosasignacionDMG = request()->except('_token');
        AsignacionDMG::insert($datosasignacionDMG);
        return redirect('asginacionDMG');
    }

    /**
     * Elimina el campo seleccionado en la vista asignacion-pgm, utilizando su identificador correspondiente
     * en la tabla de la base de datos, luego se redirecciona a la vista asignacion-pgm
     */
    public function destroy($id)
    {
        AsignacionDMG::destroy($id);
        return redirect('asginacionDMG');
    }
}
