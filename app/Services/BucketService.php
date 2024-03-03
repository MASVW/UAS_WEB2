<?php

namespace App\Services;

use App\Models\Bucket;
use http\Env\Response;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use PHPUnit\Exception;

class BucketService
{
    public function __construct(public int $userId)
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
    public function removeItem($itemId): string
    {
        try {
            $data = Bucket::findOrFail($itemId);
            if ($data)
            {
                $data->delete();
                return 'Berhasil menghapus item.';
            }
        }
        catch (Exception $exception)
        {
            return 'Terjadi Error.';
        }
    }

}
