<?php

namespace App\Livewire;

use Livewire\Component;

class CheckoutConfirmation extends Component
{
    public $item;
    
    public function acceptItem(){
        $this->item = Session('item');
    }

    public function render()
    {
        $this->acceptItem();
        return view('livewire.checkout-confirmation');
    }


}
