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
        $this->acceptItem();
        return view('livewire.checkout-confirmation');
    }

    public $item;
    public $price;
    
    public function acceptItem(){
        $this->item = Session('test');
        $this->price = Session('total');
        
    }
}
