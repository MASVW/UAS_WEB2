<?php

namespace App\Livewire;

use App\Models\Position;
use App\Models\Prices;
use App\Services\BucketService;
use App\Services\LoadingService;
use App\Services\PositionService;
use App\Services\PriceService;
use Livewire\Attributes\Computed;
use Livewire\Component;

class PriceList extends Component
{
    public $event;
    public $eventId;
    public $currentPositon;
    public $price;
    public $prices;
    public $positions;
    public $positionId;

    public function mount(PriceService $priceService, PositionService $positionService)
    {
        $this->dispatch('initTippy');

        $this->eventId = $this->event->id;

        $this->positions = $positionService->getAllPosition();
        $this->positionId = $this->positions[0]['id'];
        $namedPosition = $positionService->getPositionNameById($this->positionId);
        $this->currentPositon = $namedPosition;

        $this->prices = $priceService->getPricesWithEcventAndPosition($this->eventId, $this->positionId);
    }

    function changePrice(PositionService $positionService,PriceService $priceService ,$id)
    {
        $this->positionId = $id;
        $this->prices =  $priceService->getPricesWithEcventAndPosition($this->eventId, $this->positionId);
        $this->currentPositon = $positionService->getPositionNameById($this->positionId);
}

    public function addToChart(PriceService $priceService ,BucketService $bucketService,$eventId, $pricesId)
    {
        $data =  $priceService->getPricesById($pricesId);
        $info = $bucketService->addItem($data);
        $status = http_response_code();
        if ($status === 200) {
            $this->dispatch('bucketUpdated')->to(Bucket::class);
            flash()->addSuccess($info);
        } elseif ($status === 400)
        {
            flash()->addError($info);
        }
        else{
            flash()->addWarning($info);
        }
    }

    public function render()
    {
        return view('livewire.price-list');
    }
}
