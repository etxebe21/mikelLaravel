<?php

namespace App\Livewire;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class CreateUsuarios extends Component
{

    public $first=true;
    public $currentStep = 0;
    public $validname =false;
    public $password =null;
    public $tipo_usuario=null;
    public $name=null;
    public $email=null;
   

    public function render()
    {
        return view('livewire.create-usuarios');
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
            if (!$this->name) {
                session()->flash('error', 'El nombre del usuario no es válido');
            }
            if (!$this->email) {
                session()->flash('error', 'Debe configurar el email');
            }
            if (!$this->tipo_usuario) {
                session()->flash('error', 'Falta estabelcer tipo de usuario');
            }
            if (!$this->password) {
                session()->flash('error', 'Falta la contraseña');
            }
            if ($this->checkform) {
                session()->flash('success', 'Puede guardar el edificio');
            }
        }
    }

    public function guardarUsuario()
    {
        $id = DB::table('users')->insertGetId([
            'name' => $this->name,
            'email' => $this->email,
            'tipo_usuario' => $this->tipo_usuario,
            'password' => Hash::make($this->password),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // Verificar si se insertó correctamente
        if ($id) {
            
            session()->flash('success', '¡El usuario se ha guardado correctamente!');
            return redirect('lista-usuarios')->with('success', '¡El usuario se ha guardado correctamente!');


        } else {
          
            session()->flash('error', '¡Ha ocurrido un error al intentar guardar el usuario!');
        }
          
    }
}
