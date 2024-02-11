<?php

namespace App\Livewire;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Component;

class FeedBackForm extends Component
{
    #[Validate('alpha|string|required|min:3|max:20')]
    public $firstName = '';

    #[Validate('alpha|string|required|min:3|max:20')]
    public $lastName = '';

    #[Validate('numeric|required|min:3|max:20')]
    public $phone = '';
    
    #[Validate('email|string|required')]
    public $email = '';

    #[Validate('string|required|min:3')]
    public $subject = '';

    #[Validate('string|required|min:20|max:2048')]
    public $message = '';

    public function sendFeedback()
    {
        $this->validate();
        dd($this->lastName);
    }
    public function render()
    {
        return view('livewire.feed-back-form');
    }
}
