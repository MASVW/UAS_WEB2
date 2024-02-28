<?php

namespace App\Livewire;

use App\Models\Events;
use Carbon\Carbon;
use Livewire\Attributes\Computed;
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
        $event = Events::find($this->id);
        $this->transformDate($event);        
        return $event;
    }
    
    public function transformDate($data)
    {
        $date = Carbon::parse($data['eventDate']);
        $data['eventDate'] = $date->format('d F Y');
        return $data;
    }

    public function mount()
    {
        $this->eventItem = $this->event ?? Events::where('status', 'Upcoming')->get()[0];
        $this->id = $this->eventItem->id;
       if ($this->eventItem->status == "Upcoming") {
            $this->title = $this->eventItem->eventName;
       }
       else $this->title = 'Agenda Acara';
    }

    public function render()
    {
        return view('livewire.home-section')->title($this->title);
    }
}
