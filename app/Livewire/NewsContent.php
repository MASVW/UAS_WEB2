<?php

namespace App\Livewire;
use Livewire\Component;

class NewsContent extends Component
{
    protected $title = "";
    public function render()
    {
        return view('livewire.news-content')->title($this->title);
    }
}
