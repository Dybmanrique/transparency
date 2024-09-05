<?php

namespace App\Livewire;

use App\Models\Component as ModelsComponent;
use App\Models\Condition;
use App\Models\Document;
use App\Models\Information;
use Livewire\Component;

class IndicatorsCbc extends Component
{
    public $conditions, $informations, $documents;
    public $componente_seleccionado;

    public function seleccionarComponente($componente)
    {
        $this->componente_seleccionado = ModelsComponent::find($componente);
        // dd($this->componente_seleccionado);
    }

    public function mount() {
        $this->conditions = Condition::where('is_active',true)->get();
        $this->informations = Information::all();
        $this->documents = Document::all();
    }

    public $isOpen = false;

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }


    public function render()
    {
        return view('livewire.indicators-cbc');
    }
}
