<?php

namespace App\Livewire;
use Livewire\Component;

class Content extends Component
{
    public $event;
    
    public function render()
    {
        return view('livewire.content',[
            "event" => $this->event
        ]);
    }
}
