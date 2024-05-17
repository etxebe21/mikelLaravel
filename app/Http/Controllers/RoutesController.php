<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\EdificiosController;
use Illuminate\Http\Request;

class RoutesController extends Controller
{
    public function verEdificios(){
        
            // $proyecto = (new proyectosController)->infoProyecto($ID_PROYECTO);
            $edificios = (new EdificiosController)->getEdificios();
            return view('listaEdificios', ['edificios'=>$edificios]);
        }
       
}
