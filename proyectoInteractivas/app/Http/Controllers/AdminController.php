<?php

namespace App\Http\Controllers;
use App\Models\Lugar;
use App\Models\Evento;

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

        function crudEventos()
    {
        $eventos = Evento::all();
        return view('administrador.eventos', compact('eventos'));
    }

        function crudEventosp()
    {
        $eventos = Evento::all();
        return view('administrador.eventosprueba', compact('eventos'));
    }

    function guardarEvento(Request $request)
    {
        $evento = new Evento();
        $evento->nombre = $request->nombre;
        $evento->descripcion = $request->descripcion;
        $evento->fecha_evento = $request->fecha;
        $evento->hora_evento = $request->hora;
        $evento->estado = $request->estado;
        $evento->lugar_id = $request->lugar;
        $evento->save();
        return redirect()->back();
    }

    function eliminarEvento($id)
    {
        $evento = Evento::find($id);
        $evento->delete();
        return redirect()->back();
    }

    function actualizarEvento(Request $request, $id)
    {
        $evento = Evento::find($id);
        $evento->nombre = $request->nombre;
        $evento->descripcion = $request->descripcion;
        $evento->fecha_evento = $request->fecha;
        $evento->hora_evento = $request->hora;
        $evento->estado = $request->estado;
        $evento->lugar_id = $request->lugar;
        $evento->save();
        return redirect()->back();
    }

    function crudUsuarios()
    {
        return view('administrador.usuarios');
    }
}
