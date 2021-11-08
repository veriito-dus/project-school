<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;

/**
 * Controlador Materias
 * Procesos que se realizaran sobre las materias que se dictan en la institucion
 * 
 * @author    Veronica Lisseth Dussan Parra
 * @since     29 de septiembre del 2021
 */
class MateriaController extends Controller
{
    /**
     * Enlista las materias que se tiene en la base de datos y los muestra en la vista materia-admin
     */
    public function index()
    {
        $materias = Materia::all();
        return view('admin.materia-admin', Compact('materias'));
    }

    /**
     * Agrega los datos que vienen de la vista materia-admin en la tabla correspondiente de la base de datos
     * exceptuando el token, después de guardar esos datos se redirecciona a la vista materia-admin
     */
    public function store(Request $request)
    {
        $datosMateria = request()->except('_token');
        Materia::insert($datosMateria);
        return redirect('materia');
    }


    /**
     * Enlista los datos de la materia del identificador de la vista materia-admin
     * para mostrarlos en la misma vistas pero en un modal
     */
    public function edit($id)
    {
        $materia = Materia::findOrFail($id);
        return view('admin.materia-admin', compact('materia'));
    }

    /**
     * Modifica los datos que vienen de la vista materia-admin en su respectiva tabla en la
     * base de datos de acuerdo a su identificador, exceptuando el token y el método los cuales
     * son dados en esta vista, luego hace un redireccionamiento a la vista materia-admin
     */
    public function update($id)
    {
        $datosMateria = request()->except(['_token', '_method']);
        Materia::where('id', '=', $id)->update($datosMateria);
        return redirect('materia');
    }

    /**
     * Elimina el campo seleccionado en la vista materia-admin, utilizando su identificador correspondiente
     * en la tabla de la base de datos, luego se redirecciona a la vista materia-admin
     */
    public function destroy($id)
    {
        Materia::destroy($id);
        return redirect('materia');
    }
}
