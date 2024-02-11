<?php

namespace App\Livewire;

use App\Models\Events;
use Livewire\Attributes\Computed;
use Livewire\Component;

class HomeSection extends Component
{
    public $id;
    protected $listeners = ['dataUpdated'];
    public $event;
    
    #[Computed]
    public function events()
    {
        return Events::find($this->id);
    }
    public function mount()
    {
        $eventId = Events::where('status', 1)->select(['id'])->first();
        $this->id = $eventId->id;
    }

    public function dataUpdated($id)
    {
        $this->id = $id;
        $this->events();
    }

    public function render()
    {
        return view('livewire.home-section');
    }
}
