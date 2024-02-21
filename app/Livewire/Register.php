<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;

class Register extends Component
{
    #[Validate]
    public $firstName = '';
    #[Validate]
    public $lastName = '';
    #[Validate]
    public $birthDate = '';
    #[Validate]
    public $phone = '';
    #[Validate]
    public $email = '';
    #[Validate]
    public $password = '';
      

    public function rules()
    {
        return [
            'firstName' => ['required', 'string', 'max:15'],
            'lastName' => ['required', 'string', 'max:15'],
            'birthDate' => ['required', 'date'],
            'email' => ['required', 'string', 'email', 'max:30', 'unique:users'],
            'phone' => ['required', 'string', 'unique:users'],
            'email.unique' => __('Validation.custom.email.unique'),
            'phone.unique' => __('Validation.custom.phone.unique'),
            'password'   => [
                'required',
                'string',
                'min:8',             
                'regex:/[a-z]/',    
                'regex:/[A-Z]/',   
                'regex:/[0-9]/',     
            ],
        ];
    }
        

    public function render()
    {
        return view('livewire.register')->title('Daftar');
    }
}
