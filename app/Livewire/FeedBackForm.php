<?php 

namespace App\Livewire;

use App\Models\FeedBack;
use Livewire\Component;

class FeedBackForm extends Component
{
    public $firstName = '';
    public $lastName = '';
    public $phone = '';
    public $email = '';
    public $subject = '';
    public $message = '';

    protected $rules = [
        'firstName' => 'alpha|string|required|min:3|max:20',
        'lastName' => 'alpha|string|required|min:3|max:20',
        'phone' => 'string|required|min:10|max:15',
        'email' => 'email|string|required',
        'subject' => 'string|required|min:3',
        'message' => 'string|required|min:20|max:2048',
    ];

    public function sendFeedback()
    {
        $validated = $this->validate();
        FeedBack::create($validated);
        $this->resetForm();
        flash()->addSuccess('Your feedback has been submitted successfully.');
    }

    public function resetForm()
    {
        $this->reset([
            'firstName',
            'lastName',
            'phone',
            'email',
            'subject',
            'message',
        ]);
    }

    public function render()
    {
        return view('livewire.feed-back-form');
    }
}
