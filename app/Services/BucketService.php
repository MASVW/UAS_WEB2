<?php

namespace App\Services;

use App\Models\Bucket;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;

class BucketService
{
    public function __construct(public int $id)
    {
        if (auth()->check()) {
            $this->id = auth()->user()->id;
        }
    }
    public function getDataWithPricesEvents(): EloquentCollection
    {
        return Bucket::where('users_id', $this->id)->with('prices', 'events')->get();
    }
}
