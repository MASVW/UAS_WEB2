<?php

namespace App\Livewire;

use App\Http\Controllers\Navigation;
use App\Models\Events;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Title;
use Livewire\Component;

class HomeSection extends Component
{
    public $id;
    public Events $event;
    public $eventItem;
    public $title;

    #[Computed]
    public function events()
    {
        return Events::find($this->id);
    }

    public function mount()
    {
        $this->eventItem = $this->event ?? Events::where('status', 1)->get()[0];
        $this->id = $this->eventItem->id;
        $this->title = $this->eventItem->eventName;
    }

    public function render()
    {
        return view('livewire.home-section')->title($this->title);
    }
}
