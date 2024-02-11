<?php

namespace App\Livewire;

use App\Models\Events;
use Livewire\Component;
use Livewire\Attributes\Computed;


class Navigation extends Component
{
    public $dataToSend;
    public $eventId;

    // Taking Datas
    #[Computed]
    public function events()
    {
        return Events::where('status', 1)->get();
    }

    // First Step before render
    public function mount()
    {
        $data = $this->events;
        $this->eventId = $data[0]["id"];
    }

    // Rendering
    public function render()
    {
        // dd($this->eventId);
        return view('livewire.navigation', [
            "eventId" => $this->eventId
        ]);
    }

    // Button listener
    public function sendToReceiver($eventId)
    {
        $this->eventId = $eventId;
        $this->dispatch('dataUpdated', $eventId);
    }
    
}
