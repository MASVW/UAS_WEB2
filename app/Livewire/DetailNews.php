<?php

namespace App\Livewire;

use App\Models\Events;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class DetailNews extends Component
{
    use WithPagination, WithoutUrlPagination;
    
    public $headline = "Event";
    public $status = "Active";
    public $test = 0;

    #[Computed]
    public function item()
    {
        return Events::where('status', $this->status)->paginate(9);
    }

    public function render()
    {
        return view('livewire.detail-news');
    }
}
;