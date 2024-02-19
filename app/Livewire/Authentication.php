<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Request;
use Livewire\Component;

class Authentication extends Component
{
    public $email = '';
    public $password = '';

    protected $rules = [
        'email' => 'email|string|required',
        'password'   => [
            'required',
            'string',
            'min:8',             
            'regex:/[a-z]/',    
            'regex:/[A-Z]/',   
            'regex:/[0-9]/',     
        ],
    ];
    
    function auth()
    {
        $validated = $this->validate();
        dd($this->email);
    }
    public function render()
    {
        return view('livewire.authentication')->title('Masuk');
    }
}
