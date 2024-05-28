<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProyectosController extends Controller
{
    public function getProyectos(){
        $proyectos= DB::table('proyectos')
            ->get();

        return $proyectos;
    }  

    public function getEdificiosProyecto($ID_PROYECTO)
    {
        $edificios = DB::table('edificios')
            ->join('proyectos', 'edificios.ID_PROYECTO', 'proyectos.ID_PROYECTO')
            ->where('edificios.ID_PROYECTO', $ID_PROYECTO)
            ->get();

        return $edificios;
    }

    public function deleteProyecto($ID_PROYECTO)
    {
        // Obtener los IDs de los edificios relacionados con el proyecto
        $id_edificios = DB::table('edificios')->where('ID_PROYECTO', $ID_PROYECTO)->pluck('ID_EDIFICIO')->toArray();

        // Eliminar las viviendas relacionadas con los edificios
        DB::table('viviendas')->whereIn('ID_EDIFICIO', $id_edificios)->delete();

        // Eliminar los edificios relacionados con el proyecto
        DB::table('edificios')->where('ID_PROYECTO', $ID_PROYECTO)->delete();

        // Eliminar el proyecto
        DB::table('proyectos')->where('ID_PROYECTO', $ID_PROYECTO)->delete();

        return redirect()->route('lista-proyectos')->with('success', 'El proyecto y sus datos relacionados han sido eliminados exitosamente.');
    }

}
