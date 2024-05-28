<?php

namespace App\Livewire;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Carbon\Carbon;

class CreateViviendas extends Component
{
    public $first=true;
    public $currentStep = 0;
    public $validname =false;
    public $tipo =null;
    public $ID_USUARIO=null;
    public $PISO = null;
    public $ID_VIVIENDA=null;
    public $CODIGO_VIVIENDA=null;
    public $ID_EDIFICIO = null;
    public $edificios = array();
    
    public $NOMBRE = null;

    public function render()
    {
        return view('livewire.create-viviendas');
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
            if (!$this->PISO) {
                session()->flash('error', 'Debe configurar el piso');
            }
            if (!$this->CODIGO_VIVIENDA) {
                session()->flash('error', 'La vivienda no tiene código asignado');
            }
            if ($this->checkform) {
                session()->flash('success', 'Puede guardar la vivienda');
            }
        }
    }

    public function guardarVivienda()
    {
        $ID_VIVIENDA = DB::table('viviendas')->insertGetId([
            'ID_EDIFICIO' => $this->ID_EDIFICIO,
            'CODIGO_VIVIENDA' => $this->CODIGO_VIVIENDA,
            'PISO' => $this->PISO,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // Verificar si se insertó correctamente
        if ($ID_VIVIENDA) {
            // Si se insertó correctamente, enviar un mensaje de éxito
            session()->flash('success', '¡La vivienda se ha guardado correctamente!');
            return redirect('lista-viviendas')->with('success', '¡La vivienda se ha guardado correctamente!');


        } else {
            // Si hubo un error en la inserción, enviar un mensaje de error
            session()->flash('error', '¡Ha ocurrido un error al intentar guardar la vivienda!');
        }
            
    }

    public function actualizarIdEdificio($value)
    {
        // Dividir el valor seleccionado para obtener el nombre y el ID del proyecto
        $partes = explode('|', $value);
        $nombreEdificio = $partes[0];
        $idEdificio = $partes[1];

        // Actualizar las propiedades del componente con los valores obtenidos
        $this->NOMBRE_EDIFICIO = $nombreEdificio;
        $this->ID_EDIFICIO = $idEdificio;
    }
}
