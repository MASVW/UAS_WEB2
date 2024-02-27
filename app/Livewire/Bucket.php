<?php

namespace App\Livewire;

use App\Models\Bucket as ModelsBucket;
use App\Models\Events;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Carbon\Carbon;

class Bucket extends Component
{
    public $userId = '';
    #[Computed]
    public function bucket()
    {
        $buckets = ModelsBucket::where('users_id', $this->userId)->with('prices.positions', 'events')->get();
        $bucketCollection = collect($buckets);
        $this->transformDate($bucketCollection);
        return $bucketCollection;
    }
    #[Computed]
    public function event()
    {
        return Events::where('status', 'Upcoming')->with('prices')->get();
    }

    public function transformDate($data)
    {
        $data->transform(function ($item) {
            $eventDate = Carbon::parse($item->events->eventDate);
            $item->events->eventDate = $eventDate->format('d F Y');
            return $item;
        });
    }

    public function render()
    {
        return view('livewire.bucket');
    }
}
