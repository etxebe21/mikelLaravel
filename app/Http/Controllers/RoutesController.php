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
        $proyectos = (new proyectosController)->getProyectos();
        $edificios = (new EdificiosController)->getEdificios();
        
        return view('listaEdificios', ['edificios'=>$edificios, 'proyectos'=>$proyectos]);
    }
       
    public function verEdificiosProyecto($ID_PROYECTO){
        $proyectos = (new proyectosController)->getProyectos();
        $edificios = (new ProyectosController)->getEdificiosProyecto($ID_PROYECTO);
        return view('listaEdificios', ['edificios'=>$edificios, 'ID_PROYECTO'=> $ID_PROYECTO]);
        
    }

    public function verProyectos(){
         $proyectos = (new proyectosController)->getProyectos();
        $edificios = (new EdificiosController)->getEdificios();
        return view('listaProyectos', ['proyectos'=>$proyectos]);
    }

    public function verViviendas(){
        $proyectos = (new proyectosController)->getProyectos();
       $edificios = (new EdificiosController)->getEdificios();
       $viviendas = (new ViviendasController)->getViviendas();

       return view('listaViviendas', ['viviendas'=>$viviendas]);
    }

    public function verViviendasEdificio($ID_EDIFICIO){
        $proyectos = (new proyectosController)->getProyectos();
       $edificios = (new EdificiosController)->getEdificios();
       $viviendas = (new EdificiosController)->getViviendasEdificios($ID_EDIFICIO);

       return view('listaViviendas', ['viviendas'=>$viviendas, 'ID_EDIFICIO' => $ID_EDIFICIO]);
    }

    public function verUsuarios(){
        $usuarios = (new LoginController)->getUsuarios();
      
       return view('listaUsuarios', ['usuarios'=>$usuarios]);
    }

    public function crearProyecto(){
   
        return view('createProyecto');
    }

    public function crearEdificio(){
        $proyectos = (new proyectosController)->getProyectos();

        return view('createEdificio', ['proyectos'=>$proyectos]);
    }

    public function crearVivienda(){
        $edificios = (new EdificiosController)->getEdificios();

        return view('createVivienda', ['edificios'=>$edificios]);
    }

    public function crearUsuario(){

        return view('createUsuario');    
    }
}
