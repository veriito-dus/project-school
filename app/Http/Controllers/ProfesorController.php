<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use App\Models\Grade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * Controlador Profesores
 * Procesos que se realizaran sobre los profesores de la institución
 * 
 * @author    Veronica Lisseth Dussan Parra
 * @since     22 de septiembre del 2021
 */

class ProfesorController extends Controller
{
    /**
     * Enlista los profesor que se tiene en la base de datos y
     * los muestra en la vista teacher-admin
     */
    public function index()
    {
        $profesores = Profesor::all();
        return view('admin.teachers.teacher-admin', compact('profesores'));
    }

    /**
     * Enlista los grados que se tiene en la base de datos y
     * los muestra en la vista add de los profesores en el administrador
     */
    public function create()
    {
        $grados = Grade::all();
        return view('admin.teachers.add', compact('grados'));
    }

    /**
     * Agrega los datos que vienen de la vista add de los profesores en el administrador
     * en la tabla correspondiente de la base de datos exceptuando el token,
     * también contiene una condición que hace el cambio de tipo de archivo de imagen,
     * luego de esto guarda la imagen en este proyecto en
     * storage/app/public/uploadsProfesores para después guardar esos
     * datos y se redirecciona a la vista teacher-admin
     */
    public function store(Request $request)
    {
        $datosProfesor = request()->except('_token');
        if ($request->hasFile('Foto')) {
            $datosProfesor['Foto'] = $request->file('Foto')->store('uploadsProfesores', 'public');
        }
        Profesor::insert($datosProfesor);
        return redirect('profesor');
    }

    /**
     * Enlista los datos de sobre los profesores y los grados desde la base de
     * datos y se muestran el vista edit de los profesores en el administrador
     */
    public function edit($id)
    {
        $profesor = Profesor::findOrFail($id);
        $grados = Grade::all();
        return view('admin.teachers.edit', compact('profesor', 'grados'));
    }

    /**
     * Modifica los datos que vienen de la vista teacher-admin en su respectiva
     * tabla en la base de datos de acuerdo a su identificador, exceptuando el token
     * y el método, también contiene una condición para borrar del sistema la foto
     * existente si se hace una modificación de esta, luego hace un
     * redireccionamiento a la vista teacher-admin
     */
    public function update(Request $request, $id)
    {
        $datosProfesor = request()->except(['_token', '_method']);
        if ($request->hasFile('Foto')) {
            $estudiante = Profesor::findOrFail($id);
            Storage::delete('public/' . $estudiante->Foto);
            $datosProfesor['Foto'] = $request->file('Foto')->store('uploadsProfesores', 'public');
        }
        Profesor::where('id', '=', $id)->update($datosProfesor);
        return redirect('profesor');
    }

    /**
     * Elimina el campo seleccionado en la vista teacher-admin, utilizando su
     * identificador correspondiente, también elimina la imagen del sistema,
     * luego se redirecciona a la vista teacher-admin
     */
    public function destroy($id)
    {
        $profesor = Profesor::findOrFail($id);
        if (Storage::delete('public/' . $profesor->Foto)) {
            Profesor::destroy($id);
        }
        return redirect('profesor');
    }
}
