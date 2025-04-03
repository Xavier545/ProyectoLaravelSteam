<?php

namespace App\Livewire;

use Livewire\Component;

class GestionVistaAdmin extends Component
{
    public $view = 'partials.default';

    protected $listeners = ['loadView'];

    public function loadView($view)
    {
        dd("Evento recibido con: " . $view);
        $this->view = 'partials.' + $view;
    }
    public function render()
    {
        return view('livewire.gestion-vista-admin');
    }
}
