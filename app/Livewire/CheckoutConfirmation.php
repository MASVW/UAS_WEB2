<?php

namespace App\Livewire;

use Livewire\Component;

class CheckoutConfirmation extends Component
{

    public $item;
    public $halaman = 1;
    
    public function acceptItem(){
        $this->item = Session('item');
    }

    public function nextPage(){
        $this->halaman++;
    }

    public function prevPage(){
        $this->halaman--;
    }

    public function render()
    {
        $this->acceptItem();
        return view('livewire.checkout-confirmation');
    }


}
