<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\EdificiosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB; 
class RoutesController extends Controller
{

    public function index(){
        $user = DB::table('users')->where('id', Auth::user()->ID_USUARIO)->get();
       // Auth::user()->tipo_usuario = $user->tipo_usuario;
        $ID_USUARIO = Auth::user()->id;
        return view('home', ['ID_USUARIO'=>$ID_USUARIO]);
    }

    public function verEdificios(){
        
            // $proyecto = (new proyectosController)->infoProyecto($ID_PROYECTO);
            $edificios = (new EdificiosController)->getEdificios();
            return view('listaEdificios', ['edificios'=>$edificios]);
        }
       
}
