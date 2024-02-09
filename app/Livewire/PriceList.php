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

    #[Computed]
    public function positions()
    {
        return Position::all();
    }

    #[Computed]
    public function prices()
    {
        return Prices::where('events_id', $this->event->id)
            ->where('positions_id', $this->positionId)
            ->get();
    }

    public function mount ()
    {
        $position = Position::find($this->positionId)
            ->only(['desc']);
        $this->currentPositon = $position['desc'];
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