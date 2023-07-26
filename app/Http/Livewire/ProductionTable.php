<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Production;
use Livewire\WithPagination;

class ProductionTable extends Component
{
    public $search = '';

    protected $listeners = [
        'amountStored' => 'render'
    ];

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.production-table', [
            'productions' => Production::where('created_at', 'like', '%' . $this->search . '%')->latest()->paginate(5)
        ]);
    }
}
