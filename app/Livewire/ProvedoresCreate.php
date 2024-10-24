<?php

namespace App\Livewire;

use App\Models\Suppliers;
use Livewire\Component;

class ProvedoresCreate extends Component
{
    public $name = '';
    public $moneda ='';

    protected $rules = [
        'name' => 'required|min:3|max:50',
        'moneda' => 'required|in:USD,MXN',
    ];

    public function render()
    {
        return view('livewire.provedores-create');
    }
    function save(){
        $this->validate();
        $provedores = new Suppliers();
        $provedores->name = $this->name;
        $provedores->currency = $this->moneda;
        $provedores->status = 'inactive';
        $provedores->save();
        $this->name = '';
        $this->moneda = '';
        return redirect()->route('provedores.index')->with('message', 'Proveedor guardado correctamente.');    }
}
