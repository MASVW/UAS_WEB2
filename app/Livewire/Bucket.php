<?php

namespace App\Livewire;

use App\Http\Controllers\BucketsController;
use App\Models\Bucket as ModelsBucket;
use App\Models\Events;
use App\Services\BucketService;
use App\Services\LoadingService;
use http\Env\Request;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Carbon\Carbon;
use Ramsey\Collection\Collection;

class Bucket extends Component
{
    public string $userId = '';
    public $bucket;
    public $selectedItem = [];

    //Collection
    public $id;

    public function getListeners(){
        return ['bucketUpdated'];
    }

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
    public function removeItem(BucketService $buckets, LoadingService $loadService, $id)
    {
        $loadService->startLoading();
        try {
            $info = $buckets->removeItem($id);
            $this->bucketUpdated($buckets);
            $status = http_response_code();
            if ($status === 200){
                flash()->addSuccess($info);
                $loadService->stopLoading();
            }
            else{
                flash()->addError($info);
            }
        }
        catch (\ErrorException $exception){
            flash()->addError('Terjadi kesalahan. Silahkan ulangi kembali');
        }
    }
    public function bucketUpdated(BucketService $buckets)
    {
        $data = $buckets->getDataWithPricesEvents();
        $this->transformDate($data);
        $this->bucket = $data;
    }
    public function checkOut()
    {
        $item = collect($this->selectedItem);

    }

    public function render()
    {
        return view('livewire.bucket');
    }
}
