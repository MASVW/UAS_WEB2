<?php

namespace App\Livewire;

use App\Models\Info;
use Livewire\Attributes\Computed;
use Livewire\Component;

class AboutHeader extends Component
{
    #[Computed]
    public function info()
    {
        return Info::first();
    }
    public function render()
    {
        return view('livewire.about-header');
    }
}
