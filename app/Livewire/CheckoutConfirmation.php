<?php

namespace App\Livewire;

use Livewire\Component;

class CheckoutConfirmation extends Component
{
    public $halaman = 1;

    public function nextPage(){
        $this->halaman++;
    }

    public function prevPage(){
        $this->halaman--;
    }
    public function render()
    {
        return view('livewire.checkout-confirmation');
    }
}
