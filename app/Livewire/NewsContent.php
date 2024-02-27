<?php

namespace App\Livewire;
use Livewire\Component;

class NewsContent extends Component
{
    protected $title = "Agenda Acara";
    public function render()
    {
        return view('livewire.news-content')->title($this->title);
    }
}
