<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProfesorRequest;
use App\Http\Requests\UpdateProfesorRequest;
use App\Models\Profesor;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profesores = Profesor::all();


        return view ("profesores.listado",["profesores"=>$profesores]);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ("profesores.create");
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProfesorRequest $request)
    {
     $valores = $request->input();
     $profesor = new Profesor($valores);
     $profesor->save();
     session()->flash("status", "Se ha creado el profesor $profesor->nombre");

     $profesores = Profesor::all();
     return view ("profesores.listado",["profesores"=>$profesores]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Profesor $profesor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profesor $profesor)
    {

//        $profesor= Profesor::find($id);

        return view ("profesores.edit", ['profesor'=>$profesor]);
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfesorRequest $request, Profesor $profesor)
    {
        session()->flash("status", "Se ha actualizado El profesor  $profesor->nombre");

        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $profesor =Profesor::find($id);
        $profesor->delete();
        $profesores = Profesor::all();
        session()->flash("status", "Se ha borrado El profesor  $profesor->nombre");
        return view ("profesores.listado",["profesores"=>$profesores]);
        //
    }
}
