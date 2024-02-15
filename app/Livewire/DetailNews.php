<?php

namespace App\Livewire;

use Livewire\Component;

class DetailNews extends Component
{
    public $headline = "Event";
    public function render()
    {
        return view('livewire.detail-news');
    }
}
