<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title("Lupa Password")]
class ResetPassword extends Component
{
    public function render()
    {
        return view('livewire.reset-password');
    }
}
