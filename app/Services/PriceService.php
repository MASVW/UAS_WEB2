<?php

namespace App\Services;

use App\Models\Prices;
use mysql_xdevapi\Collection;

class PriceService
{
    private $bucketService;
    public function __construct(BucketService $service)
    {
        $this->bucketService = $service;
    }

    public function getPricesById($id)
    {
        return Prices::findOrfail($id);
    }

    public function getPricesWithEcventAndPosition($eventId, $positionId)
    {
        return Prices::where('events_id', $eventId)
            ->where('positions_id', $positionId)
            ->with('positions')
            ->get();
    }




}
