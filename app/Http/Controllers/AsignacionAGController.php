<?php

namespace App\Http\Controllers;

use App\Models\AsignacionAG;
use App\Models\Estudiante;
use App\Models\Grade;
use Illuminate\Http\Request;

/**
 * Controlador Asignacion alumno - grado
 * Procesos que se realizaran sobre los las asignaciones entre alumnos y grados de la institución
 * 
 * @author    Veronica Lisseth Dussan Parra
 * @since     09 de noviembre del 2021
 */

class AsignacionAGController extends Controller
{
    /**
     * Enlista las los estudiantes, los grados y las asignaciones que se tiene en la base de datos
     * y los muestra en la vista asignacion-ag
     */
    public function index()
    {
        $asignacionAG = AsignacionAG::all();
        $estudiantes = Estudiante::all();
        $grados = Grade::all();
        return view('admin.asignacion-ag', compact('estudiantes', 'grados', 'asignacionAG'));
    }

    /**
     * Agrega los datos que vienen de la vista asignacion-ag en la tabla correspondiente de la base de datos
     * exceptuando el token, después de guardar esos datos se redirecciona a la vista asignacion-ag
     */
    public function store(Request $request)
    {
        $datosasignacionAG = request()->except('_token');
        AsignacionAG::insert($datosasignacionAG);
        return redirect('asginacionAG');
    }

    /**
     * Modifica los datos que vienen de la vista asignacion-ag en su respectiva tabla en la
     * base de datos de acuerdo a su identificador, exceptuando el token y el método los cuales
     * son dados en esta vista, luego hace un redireccionamiento a la vista asignacion-ag
     */
    public function update($id)
    {
        $datosAsignacionAG = request()->except(['_token', '_method']);
        AsignacionAG::where('id', '=', $id)->update($datosAsignacionAG);
        return redirect('asginacionAG');
    }

    /**
     * Elimina el campo seleccionado en la vista asignacion-ag, utilizando su identificador correspondiente
     * en la tabla de la base de datos, luego se redirecciona a la vista asignacion-ag
     */
    public function destroy($id)
    {
        AsignacionAG::destroy($id);
        return redirect('asginacionAG');
    }
}
