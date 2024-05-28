<?php

namespace App\Livewire;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Carbon\Carbon;

class CreateEdificios extends Component
{
    public $first=true;
    public $currentStep = 0;
    public $validname =false;
    public $tipo =null;
    public $ID_USUARIO=null;
    public $POBLACION = null;
    public $ID_EDIFICIO=null;
    public $CODIGO_EDIFICIO=null;
    public $NOMBRE=null;
    public $DIRECCION=null;
    public $ID_PROYECTO = null;
    public $proyectos = array();
    public $NOMBRE_PROYECTO = null;
    public $CALIFICACION_ENERGETICA = 'A';

    public function render()
    {
        return view('livewire.create-edificios');
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
            if (!$this->NOMBRE) {
                session()->flash('error', 'El nombre del edificio no es válido');
            }
            if (!$this->POBLACION || !$this->DIRECCION) {
                session()->flash('error', 'Debe configurar la ubicación del edificio');
            }
            if (!$this->CALIFICACION_ENERGETICA) {
                session()->flash('error', 'El edificio no tiene calificacion');
            }
            if (!$this->CODIGO_EDIFICIO) {
                session()->flash('error', 'El edificio no tiene código asignado');
            }
            if ($this->checkform) {
                session()->flash('success', 'Puede guardar el edificio');
            }
        }
    }

    public function guardarEdificio()
    {
        $ID_EDIFICIO = DB::table('edificios')->insertGetId([
            'ID_PROYECTO' => $this->ID_PROYECTO,
            'NOMBRE' => $this->NOMBRE,
            'CODIGO_EDIFICIO' => $this->CODIGO_EDIFICIO,
            'CALIFICACION_ENERGETICA' => $this->CALIFICACION_ENERGETICA,
            'POBLACION' => $this->POBLACION,
            'DIRECCION' => $this->DIRECCION,
            'YEAR_CONSTRUCCION' => Carbon::now()->year,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // Verificar si se insertó correctamente
        if ($ID_EDIFICIO) {
            // Si se insertó correctamente, enviar un mensaje de éxito
            session()->flash('success', '¡El edificio se ha guardado correctamente!');
            return redirect('lista-edificios')->with('success', '¡El edificio se ha guardado correctamente!');


        } else {
            // Si hubo un error en la inserción, enviar un mensaje de error
            session()->flash('error', '¡Ha ocurrido un error al intentar guardar el edificio!');
        }
          
    }

    public function actualizarIdProyecto($value)
{
    // Dividir el valor seleccionado para obtener el nombre y el ID del proyecto
    $partes = explode('|', $value);
    $nombreProyecto = $partes[0];
    $idProyecto = $partes[1];

    // Actualizar las propiedades del componente con los valores obtenidos
    $this->NOMBRE_PROYECTO = $nombreProyecto;
    $this->ID_PROYECTO = $idProyecto;
}

}
