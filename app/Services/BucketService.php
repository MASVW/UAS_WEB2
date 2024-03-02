<?php

namespace App\Services;

use App\Models\Bucket;
use http\Env\Response;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;

class BucketService
{
    public function __construct(public int $userId, public int $id)
    {
        if (auth()->check()) {
            $this->userId = auth()->user()->id;
        }
    }

    public function getData(): EloquentCollection
    {
        return Bucket::where('users_id')->with('events')->get();
    }
    public function getDataWithPricesEvents(): EloquentCollection
    {
        return Bucket::where('users_id', $this->userId)->with('prices', 'events')->get();
    }

    //Delete Item on Bucket

    public function removeItem()
    {
        try {
            $item = Bucket::find('id', $this->id);
            $item->delete();
            $data=[
                'status'=>'1',
                'message'=>'success'
            ];
        }
        catch (error) {
            $data=[
                'status'=>'0',
                'message'=>'failed'
            ];
        }
            return response()->json($data);
    }
}
