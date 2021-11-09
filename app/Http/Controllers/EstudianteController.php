<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Grade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * Controlador Estudiantes
 * Procesos que se realizaran sobre los estudiantes de la institución
 * 
 * @author    Veronica Lisseth Dussan Parra
 * @since     01 de noviembre del 2021
 */

class EstudianteController extends Controller
{
    /**
     * Enlista los estudiantes que se tiene en la base de datos y
     * los muestra en la vista alumnos-admin
     */
    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('admin.alumnos.alumnos-admin', compact('estudiantes'));
    }

    /**
     * Enlista los grados que se tiene en la base de datos y
     * los muestra en la vista add de los alumnos en el administrador
     */
    public function create()
    {
        $grados = Grade::all();
        return view('admin.alumnos.add', compact('grados'));
    }

    /**
     * Agrega los datos que vienen de la vista add de los alumnos en el administrador
     * en la tabla correspondiente de la base de datos exceptuando el token,
     * también contiene una condición que hace el cambio de tipo de archivo de imagen,
     * luego de esto guarda la imagen en este proyecto en
     * storage/app/public/uploadsEstudiantes para después guardar esos
     * datos y se redirecciona a la vista alumnos-admin
     */
    public function store(Request $request)
    {
        $datosEstudiante = request()->except('_token');
        if ($request->hasFile('Foto')) {
            $datosEstudiante['Foto'] = $request->file('Foto')->store('uploadsEstudiantes', 'public');
        }
        Estudiante::insert($datosEstudiante);
        return redirect('estudiante');
    }

    /**
     * Enlista los datos de sobre los estudiantes y los grados desde la base de
     * datos y se muestran el vista edit de los alumnos en el administrador
     */
    public function edit($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        $grados = Grade::all();
        return view('admin.alumnos.edit', compact('estudiante', 'grados'));
    }

    /**
     * Modifica los datos que vienen de la vista alumnos-admin en su respectiva
     * tabla en la base de datos de acuerdo a su identificador, exceptuando el token
     * y el método, también contiene una condición para borrar del sistema la foto
     * existente si se hace una modificación de esta, luego hace un
     * redireccionamiento a la vista alumnos-admin

     */
    public function update(Request $request, $id)
    {
        //se borra la foto si se actualiza
        $datosEstudiante = request()->except(['_token', '_method']);
        if ($request->hasFile('Foto')) {
            $estudiante = Estudiante::findOrFail($id);
            Storage::delete('public/' . $estudiante->Foto);
            $datosEstudiante['Foto'] = $request->file('Foto')->store('uploadsEstudiantes', 'public');
        }
        Estudiante::where('id', '=', $id)->update($datosEstudiante);
        return redirect('estudiante');
    }


    /**
     * Elimina el campo seleccionado en la vista alumnos-admin, utilizando su
     * identificador correspondiente, también elimina la imagen del sistema,
     * luego se redirecciona a la vista alumnos-admin
     */
    public function destroy($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        if (Storage::delete('public/' . $estudiante->Foto)) {
            Estudiante::destroy($id);
        }
        return redirect('estudiante');
    }
}
