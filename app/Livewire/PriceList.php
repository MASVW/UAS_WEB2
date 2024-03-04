<?php

namespace App\Livewire;

use App\Models\Position;
use App\Models\Prices;
use App\Services\BucketService;
use App\Services\LoadingService;
use Livewire\Attributes\Computed;
use Livewire\Component;

class PriceList extends Component
{
    public $positionId = 1;
    public $event;
    public $currentPositon;

    // Data For List Position
    #[Computed]
    public function positions()
    {
        return Position::all();
    }

    // Data for price list
    #[Computed]
    public function prices()
    {
        return Prices::where('events_id', $this->event->id)
            ->where('positions_id', $this->positionId)
            ->with('positions')
            ->get();
    }

    public function mount ()
    {
        $alternative = Position::where('id', $this->positionId)->select('desc')->first();
        $this->currentPositon = $this->prices[0]['positions']['desc'] ?? $alternative['desc'];
    }

    function changePrice($id)
    {
        $this->positionId = $id;
        $this->prices();
        $this->mount();
    }

    public function addToChart(BucketService $bucketService,$eventId, $pricesId)
    {
        $data = Prices::findOrfail($pricesId);
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
