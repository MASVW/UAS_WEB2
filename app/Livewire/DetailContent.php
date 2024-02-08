<?php

namespace App\Livewire;

use Livewire\Component;

class DetailContent extends Component
{
    public $event;
    public function render()
    {
        return view('livewire.detail-content', [
            "event" => $this->event
        ]);
    }
}
