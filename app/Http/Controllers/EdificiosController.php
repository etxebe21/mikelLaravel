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
}
