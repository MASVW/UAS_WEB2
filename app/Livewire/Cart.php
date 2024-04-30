<?php

namespace App\Livewire;

use Livewire\Component;
use App\Http\Controllers\BucketsController;
use App\Models\Bucket as ModelsBucket;
use App\Models\Events;
use App\Services\BucketService;
use App\Services\LoadingService;
use http\Env\Request;
use Livewire\Attributes\Computed;
use Carbon\Carbon;
use Ramsey\Collection\Collection;
use Illuminate\Support\Facades\Session;


class Cart extends Component
{
    public $bucket;
    public $selectedItem = [];
    public $item;

    public $totalPrice = 0;

    public $totalFormatted = "0";

//    public function getListeners(){
//        return ['bucketUpdated'];
//    }

    public function mount(BucketService $buckets)
    {
        $data = $buckets->getDataWithPricesEvents();
        $this->transformDate($data);
        $this->bucket = $data;
    }

    public function updatingSummary()
    {
        $data = $this->selectedItem;
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

    public function updateItem(BucketService $bucketService)
    {
        $this->item = [];
        $this->totalFormatted = "0";

        $data = $bucketService->getSummaryBucket($this->selectedItem);

        $this->item = $data['summary'];
        $this->totalFormatted = $data['totalFormatted'];
        $this->bucketUpdated($bucketService);
    }

    public function checkOut()
    {
        $item = collect($this->selectedItem);

    }
    public function render()
    {
        return view('livewire.cart');
    }

    public function confirm(){
        Session::put('item', $this->item);
        Session::save();
        return redirect('/konfirmasi-pesanan');
    }
}
