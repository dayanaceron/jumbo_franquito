<?php

namespace App\Http\Controllers;

use App\Models\teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::simplePaginate(4);
        return view('Teachers.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $teachers = new Teacher;
        $teachers->nombre = $request->nombres;
        $teachers->apellido = $request->apellidos;
        $teachers->direccion = $request->direccion;
        $teachers->correo = $request->correo;
        $teachers->celular = $request->celular;
        $teachers->nivel_academico = $request->nivel_academico;
        $teachers->save();
        return redirect()->route('profesores.create');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = Teacher::find($id);
        return view('teachers.edit',compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, teacher $teachers, $id)
    {
        $teacher=Teacher::find($id);
        $teachers->nombre = $request->nombres;
        $teachers->apellido = $request->apellidos;
        $teachers->direccion = $request->direccion;
        $teachers->correo = $request->correo;
        $teachers->celular = $request->celular;
        $teachers->nivel_academico = $request->nivel_academico;
        $teachers->save();
        return redirect()->route('profesores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher=Teacher::findOrFail($id);
        $teacher->delete();
        return redirect()->route('profesores.index');
    }
}
