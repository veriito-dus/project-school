<?php

namespace App\Http\Controllers;

use App\Models\login;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
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
    public function store()
    {
        //iniciar session
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'el usuario o la contraseña son incorrectas, intentelo de nuevo'
            ]);
        };
        if (auth()->user()->rol_id == '1') {
            return redirect()->to('/admin');
        } elseif (auth()->user()->rol_id == '2') {
            return redirect()->to('/docente');
        } elseif (auth()->user()->rol_id == '3') {
            return redirect()->to('/profesorAsignado');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\login  $login
     * @return \Illuminate\Http\Response
     */
    public function show(login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\login  $login
     * @return \Illuminate\Http\Response
     */
    public function edit(login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\login  $login
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\login  $login
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        auth()->logout();
        return redirect()->to('login');
    }
}
