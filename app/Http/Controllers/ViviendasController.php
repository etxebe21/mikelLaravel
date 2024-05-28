<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ViviendasController extends Controller
{
    public function getViviendas(){
        $viviendas= DB::table('viviendas')
            ->join('edificios', 'edificios.ID_EDIFICIO', 'viviendas.ID_EDIFICIO')
            ->get();
        return $viviendas;
    }

    public function deleteVivienda($ID_VIVIENDA)
    {
        $id_edificio = DB::table('viviendas')->where('ID_VIVIENDA', $ID_VIVIENDA)->value('ID_EDIFICIO');
        // Eliminar la vivienda
        DB::table('viviendas')->where('ID_VIVIENDA', $ID_VIVIENDA)->delete();

        return redirect()->route('lista-viviendas')->with('success', 'La vivienda y sus datos relacionados han sido eliminados exitosamente.');
    }

}
