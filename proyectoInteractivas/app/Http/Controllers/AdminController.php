<?php

namespace App\Http\Controllers;
use App\Models\Lugar;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function crudLugares()
    {
        $lugares = Lugar::all();
        return view('administrador.lugares', compact('lugares'));
    }

    function guardarLugar(Request $request)
    {
        $lugar = new Lugar();
        $lugar->nombre = $request->nombre;
        $lugar->descripcion = $request->descripcion;
        $lugar->direccion = $request->direccion;
        $lugar->capacidad = $request->capacidad;
        $lugar->save();
        return redirect()->back();
    }

    function eliminarLugar($id)
    {
        $lugar = Lugar::find($id);
        $lugar->delete();
        return redirect()->back();
    }

    function actualizarLugar(Request $request, $id)
    {
        $lugar = Lugar::find($id);
        $lugar->nombre = $request->nombre;
        $lugar->descripcion = $request->descripcion;
        $lugar->direccion = $request->direccion;
        $lugar->capacidad = $request->capacidad;
        $lugar->save();
        return redirect()->back();
    }
}
