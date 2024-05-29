<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EdificiosController extends Controller
{
    public function getEdificios(){
        $edificios= DB::table('edificios')           
            ->join('proyectos', 'proyectos.ID_PROYECTO', 'edificios.ID_PROYECTO')
            ->get();

        return $edificios;
    }

    public function deleteEdificio($ID_EDIFICIO)
    {
        $id_viviendas = DB::table('viviendas')->where('ID_EDIFICIO', $ID_EDIFICIO)->pluck('ID_EDIFICIO')->toArray();
        // Eliminar las viviendas relacionadas con los edificios
        DB::table('viviendas')->whereIn('ID_EDIFICIO', $id_viviendas)->delete();
        // Eliminar los edificios relacionados con el proyecto
        DB::table('edificios')->where('ID_EDIFICIO', $ID_EDIFICIO)->delete();

        return redirect()->route('lista-edificios')->with('success', 'El edificio y sus datos relacionados han sido eliminados exitosamente.');
    }

    public function getViviendasEdificios($ID_EDIFICIO)
    {
        $viviendas = DB::table('viviendas')
            ->join('edificios', 'viviendas.ID_EDIFICIO', 'edificios.ID_EDIFICIO')
            ->where('viviendas.ID_EDIFICIO', $ID_EDIFICIO)
            ->get();

        return $viviendas;
    }

    public function edit($ID_EDIFICIO)
    {
        $edificio = DB::table('edificios')->where('ID_EDIFICIO', $ID_EDIFICIO)->first();

        return view('editarEdificio', ['edificio' => $edificio]);
    }

    public function update(Request $request, $ID_EDIFICIO)
    {
        $request->validate([
            'NOMBRE' => 'required|string|max:255',
            'DIRECCION' => 'required|string|max:255',
            'POBLACION' => 'required|string|max:255',
            'ID_PROYECTO' => 'required|integer',
            'CODIGO_EDIFICIO' => 'required|string|max:255',
            'N_VIVIENDAS' => 'required|integer',
            'CALIFICACION_ENERGETICA' => 'required|string|max:255',
        ]);

        DB::table('edificios')
            ->where('ID_EDIFICIO', $ID_EDIFICIO)
            ->update([
                'NOMBRE' => $request->input('NOMBRE'),
                'DIRECCION' => $request->input('DIRECCION'),
                'POBLACION' => $request->input('POBLACION'),
                'ID_PROYECTO' => $request->input('ID_PROYECTO'),
                'CODIGO_EDIFICIO' => $request->input('CODIGO_EDIFICIO'),
                'N_VIVIENDAS' => $request->input('N_VIVIENDAS'),
                'CALIFICACION_ENERGETICA' => $request->input('CALIFICACION_ENERGETICA'),
            ]);

        return redirect()->route('lista-edificios')->with('success', 'Edificio actualizado exitosamente.');
    }
}
