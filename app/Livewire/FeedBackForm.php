<?php

namespace App\Livewire;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Component;

class FeedBackForm extends Component
{
    #[Validate('string|required|min:10')]
    public $firstName = '';
    public function sendFeedback()
    {
        // dd($this->only(['firstName']));
        $this->validate();
        dd($this->firstName);
    }
    public function render()
    {
        return view('livewire.feed-back-form');
    }
}
