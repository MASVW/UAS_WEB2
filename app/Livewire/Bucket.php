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
    public function getListeners(){
        return ['bucketUpdated'];
    }
    public function bucketUpdated(BucketService $buckets)
    {
        $data = $buckets->getDataWithPricesEvents();
        $this->transformDate($data);
        $this->bucket = $data;
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
    public function removeItem(BucketService $buckets, $id)
    {
        try {
            $info = $buckets->removeItem($id);
            $this->dispatch('bucketUpdated')->self();
            $status = http_response_code();
            if ($status === 200){
                flash()->addSuccess($info);
            }
            else{
                flash()->addError($info);
            }
        }
        catch (\ErrorException $exception){
            flash()->addError('Terjadi kesalahn. Silahkan ulangi kembali');
        }

    }

    public function render()
    {
        return view('livewire.bucket');
    }
}
