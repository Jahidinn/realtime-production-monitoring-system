<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Production;

class ProductionInput extends Component
{

    public $line_id;
    public $name;
    public $amount;
    public function render()
    {
        return view('livewire.production-input');
    }
    public function store()
    {
        $this->validate([
            'line_id' => 'required|integer|between:1,10',
            'name' => 'required|min:5|',
            'amount' => 'required|integer'
        ]);

        $production = Production::create([
            'line_id' => $this->line_id,
            'name' => $this->name,
            'amount' => $this->amount
        ]);

        $this->resetInput();
        $this->emit('amountStored');

        session()->flash('success', 'Data berhasil ditambahkan');
    }
    private function resetInput()
    {
        $this->line_id = null;
        $this->name = null;
        $this->amount = null;
    }
}
