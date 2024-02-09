<?php

namespace App\Livewire;

use App\Models\Position;
use App\Models\Prices;
use Livewire\Attributes\Computed;
use Livewire\Component;

class PriceList extends Component
{
    public $priceId = 1;
    public $event;

    #[Computed]
    public function positions()
    {
        return Position::all();
    }

    #[Computed]
    public function prices()
    {
        return Prices::where('events_id', $this->event->id)
            ->where('positions_id', $this->priceId)
            ->get();
    }

    public function render()
    {
        return view('livewire.price-list');
    }
}