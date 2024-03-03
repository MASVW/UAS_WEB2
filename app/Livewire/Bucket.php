<?php

namespace App\Livewire;

use App\Http\Controllers\BucketsController;
use App\Models\Bucket as ModelsBucket;
use App\Models\Events;
use App\Services\BucketService;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Carbon\Carbon;

class Bucket extends Component
{
    public string $userId = '';
    public $bucket;
    public function mount(BucketService $buckets)
    {
        $data = $buckets->getDataWithPricesEvents();
        $this->transformDate($data);
        $this->bucket = $data;
    }
    public function transformDate($data)
    {
        $data->transform(function ($bucket) {
            $eventDate = Carbon::parse($bucket->events->eventDate);
            $bucket->events->eventDate = $eventDate->format('d F Y');
            return $bucket;
        });
    }
    public function removeItem(BucketService $buckets, $id)
    {
        $info = $buckets->removeItem($id);
        $data = $buckets->getDataWithPricesEvents();
        $this->transformDate($data);
        $this->bucket = $data;
        flash()->addSuccess($info);
    }

    public function render()
    {
        return view('livewire.bucket');
    }
}
