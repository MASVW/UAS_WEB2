<?php

namespace App\Livewire;

use App\Http\Controllers\HomeSection;
use App\Models\Events;
use Livewire\Component;
use Livewire\Attributes\Computed;


class Navigation extends Component
{
    public $dataToSend;
    public $eventId;
    public $title;

    // Taking Datas

    #[Computed]
    public function events()
    {
        return Events::where('status', 'Upcoming')->get();
    }

    // Rendering
    public function render()
    {
        // dd($this->eventId);
        return view('livewire.navigation');
    }
}
