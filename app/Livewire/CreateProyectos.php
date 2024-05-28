<?php

namespace App\Livewire;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;


class CreateProyectos extends Component
{
    public $first=true;
    public $currentStep = 0;
    public $validname =false;
    public $tipo =null;
    public $ID_USUARIO=null;
    public $POBLACION = null;
    public $N_PROYECTOS = 0;
    public $ID_PROYECTO=null;
    public $CODIGO_PROYECTO=null;
    public $NOMBRE_PROYECTO=null;
    public $DIRECCION=null;
    public $codigoProyecto ;
    public $seleccionarUbicacion = false;


    public function render()
    {
        return view('livewire.create-proyectos');
    }

    public function nextStep()
    {
        $this->currentStep++;
    }

    public function previousStep()
    {
        $this->currentStep--;
    }

    public function showStep($step){
        $this->currentStep=$step;
    }

    public $checkform = false;
    public function comprobarForm()
    {
        if (!$this->checkform) {
            session()->flash('error', 'Revise la configuración');
        } else {
            if (!$this->NOMBRE_PROYECTO) {
                session()->flash('error', 'El nombre del proyecto no es válido');
            }
            if (!$this->POBLACION || !$this->DIRECCION) {
                session()->flash('error', 'Debe configurar la ubicación del proyecto');
            }
            if (!$this->CODIGO_PROYECTO) {
                session()->flash('error', 'El proyecto no tiene código asignado');
            }
            if ($this->checkform) {
                session()->flash('success', 'Puede guardar el proyecto');
            }
        }
    }

    public function guardarProyecto()
    {
        $ID_PROYECTO = DB::table('proyectos')->insertGetId([
            'NOMBRE_PROYECTO' => $this->NOMBRE_PROYECTO,
            'CODIGO_PROYECTO' => $this->CODIGO_PROYECTO,
            'POBLACION' => $this->POBLACION,
            'DIRECCION' => $this->DIRECCION,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // Verificar si se insertó correctamente
        if ($ID_PROYECTO) {
            // Si se insertó correctamente, enviar un mensaje de éxito
            session()->flash('success', '¡El proyecto se ha guardado correctamente!');
            return redirect('lista-proyectos')->with('success', '¡El proyecto se ha guardado correctamente!');


        } else {
            // Si hubo un error en la inserción, enviar un mensaje de error
            session()->flash('error', '¡Ha ocurrido un error al intentar guardar el proyecto!');
        }
          
    }
  
}
