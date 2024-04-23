<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

class AdminEvent extends Component
{
    #[Layout('components.layouts.admin')] 
    public function render()
    {
        return view('livewire.admin.admin-event');
    }
}
