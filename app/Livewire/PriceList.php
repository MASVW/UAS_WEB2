<?php

namespace App\Livewire;

use App\Models\Position;
use App\Models\Prices;
use Livewire\Attributes\Computed;
use Livewire\Component;

class PriceList extends Component
{
    public $positionId = 1;
    public $event;
    public $currentPositon;

    // Data For List Position 
    #[Computed]
    public function positions()
    {
        return Position::all();
    }

    // Data for price list
    #[Computed]
    public function prices()
    {
        return Prices::where('events_id', $this->event->id)
            ->where('positions_id', $this->positionId)
            ->with('positions')
            ->get();
    }

    public function mount ()
    {
        $alternative = Position::where('id', $this->positionId)->select('desc')->first();
        $this->currentPositon = $this->prices[0]['positions']['desc'] ?? $alternative['desc'];
    }

    function changePrice($id)
    {
        $this->positionId = $id;
        $this->prices();
        $this->mount();
    }

    public function render()
    {
        return view('livewire.price-list');
    }
}