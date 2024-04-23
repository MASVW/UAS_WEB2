<?php

namespace App\Livewire;

use App\Services\EventService;
use Livewire\Component;

class AdminListAllEvent extends Component
{
    public $event;
    public function mount(EventService $eventService){
        $this->event = $eventService->getAllEvents();
    }

    public function render()
    {
        return view('livewire.admin.admin-list-all-event');
    }
}
