<?php

namespace App\Livewire;

use App\Models\Bucket as ModelsBucket;
use App\Models\Events;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Bucket extends Component
{
    public $userId = '';
    #[Computed]
    public function bucket()
    {
        return ModelsBucket::where('users_id', $this->userId)->get();
    }
    #[Computed]
    public function event()
    {
        return Events::where('status', 'Upcoming')->with('prices')->get();
    }

    public function render()
    {
        return view('livewire.bucket');
    }
}
