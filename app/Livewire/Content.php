<?php

namespace App\Livewire;

use App\Models\Events;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Content extends Component
{
    public $id = 1;
    protected $listeners = ['dataUpdated' => 'handleDataUpdate'];

    #[Computed]
    public function event()
    {
        return Events::find($this->id);
    }

    public function handleDataUpdate($id)
    {
        $this->id = $id;
        $this->event();
    }

    public function render()
    {
        return view('livewire.content');
    }
}
