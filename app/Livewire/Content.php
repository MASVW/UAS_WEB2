<?php

namespace App\Livewire;

use App\Models\Events;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Content extends Component
{
    public $event;
    public function render()
    {
        return view('livewire.content',["event" => $this->event]);
    }
}
