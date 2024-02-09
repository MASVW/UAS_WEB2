<?php

namespace App\Livewire;

use App\Models\Events;
use Livewire\Attributes\Computed;
use Livewire\Component;

class HomeSection extends Component
{
    public $id = 1;
    protected $listeners = ['dataUpdated'];
    public $event;
    
    #[Computed]
    public function events()
    {
        return Events::find($this->id);
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
