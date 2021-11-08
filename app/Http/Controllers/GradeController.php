<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

/**
* Controlador Grados
* Procesos que se realizaran sobre los grados que contiene la institucion
* 
* @author    Veronica Lisseth Dussan Parra
* @since     01 de noviembre del 2021
*/
class GradeController extends Controller
{
    /**
     * Enlista los grados que se tiene en la base de datos y los muestra en la vista grados
     */
    public function index()
    {
        $grados=Grade::all();
        // return view('prueba.prueba',$datos);
        return view('admin.grades-admin',compact('grados'));
        // return view('prueba.prueba',compact('grados'));
    }

    /**
     * Agrega los datos que vienen de la vista grados en la tabla correspondiente de la base de datos
     * exceptuando el token, después de guardar esos datos se redireccióna a la vista grados
     */
    public function store(Request $request)
    {
        // $datosEmpleado=request()->all();
        $datosGrado=request()->except('_token');
        // hacer el cambio de tipo de archivo, la carpeta uploadempleado es variable
        Grade::insert($datosGrado);
        // return response()->json($datosEmpleado);
        return redirect('grado');
    }

    /**
     * Elimina el campo seleccionado en la vista grados, utilizando su identificador correspondiente
     * en la tabla de la base de datos, luego se redirecciona a la vista grados
     */
    public function destroy($id)
    {
        // $empleado=Grade::findOrFail($id);
        Grade::destroy($id);
        return redirect('grado');
    }
}
