<?php

namespace App\Livewire;

use App\Models\Suppliers;
use Livewire\Component;

class ProvedoresEditar extends Component
{
    public $showSquare = false;
    public $Idprovedor;
    public $name = '';
    public $moneda ='';
    public $status = '';

    protected $rules = [
        'name' => 'required|min:3|max:50',
        'moneda' => 'required|in:USD,MXN',
    ];

    public function mount()
    {

        $this->Idprovedor = Suppliers::find($this->Idprovedor);
        $this->name = $this->Idprovedor->name;
        if (!$this->Idprovedor) {
            return redirect()->route('provedores.index')->with('message', 'El proveedor no existe.');
        }
    }

    public function render()
    {
        return view('livewire.provedores-editar');
    }
    function toggleSquare()
    {
        $this->showSquare = !$this->showSquare;
    }
    function delete()
    {
        $this->Idprovedor->delete();
        return redirect()->route('provedores.index')->with('message', 'Proveedor eliminado correctamente.');
    }
    function edit()
    {
        $this->validate();
        $this->Idprovedor->name = $this->name;
        $this->Idprovedor->currency = $this->moneda;
        $this->Idprovedor->status = $this->status; 
        $this->Idprovedor->save(); 
        return redirect()->route('provedores.index')->with('message', 'Proveedor editado correctamente.');
    }
}
