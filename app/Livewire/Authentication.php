<?php

namespace App\Livewire;

use Livewire\Component;

class Authentication extends Component
{
    public function render()
    {
        return view('livewire.authentication')->title('Masuk');
    }
    public function loginWithAzure(){
        return redirect(route('azure-login'));
    }
}

