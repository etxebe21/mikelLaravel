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

    public function edit($ID_VIVIENDA)
    {
        $vivienda = DB::table('viviendas')->where('ID_VIVIENDA', $ID_VIVIENDA)->first();
        return view('editarVivienda', compact('vivienda'));
    }

    public function update(Request $request, $ID_VIVIENDA)
    {
        $request->validate([
            'ID_EDIFICIO' => 'required|integer',
            'CODIGO_VIVIENDA' => 'required|string|max:255',
            'PISO' => 'required|string|max:25',
        ]);

        DB::table('viviendas')
            ->where('ID_VIVIENDA', $ID_VIVIENDA)
            ->update([
                'ID_EDIFICIO' => $request->input('ID_EDIFICIO'),
                'CODIGO_VIVIENDA' => $request->input('CODIGO_VIVIENDA'),
                'PISO' => $request->input('PISO'),

            ]);

        return redirect()->route('lista-viviendas')->with('success', 'Vivienda actualizada exitosamente.');
    }


}
