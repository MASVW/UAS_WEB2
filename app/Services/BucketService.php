<?php

namespace App\Services;

use App\Models\Bucket;
use App\Models\Events;
use http\Env\Response;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Support\Facades\Request;
use PhpParser\Node\Expr\Cast\Object_;
use PHPUnit\Exception;

class BucketService
{

    public function __construct(public int $userId)
    {
        if (auth()->check()) {
            $this->userId = auth()->user()->id;
        }
    }


    public function getDataWithPricesEvents(): EloquentCollection
    {
        return Bucket::where('users_id', $this->userId)->with('prices.positions', 'events')->get();
    }

    public function getDataWithPricesEventsById($data)
    {
        return Bucket::where('id', $data)->with('prices.positions', 'events', 'prices')->first();
    }

    public function getSummaryBucket($data)
    {
        $total = 0;
        $summary = [];

        $count = count($data);
        for ($i = 0; $i < $count; $i++) {
            $item = $this->getDataWithPricesEventsById($data[$i]);
            $summary[$i] = $item;
            $total += $item->prices->price;
        }

        return [
            'summary' => $summary,
            'totalFormatted' => $this->formatCurrency($total)
        ];
    }

    function formatCurrency($amount):string
    {
        return number_format($amount, 0, ',', '.');
    }

    public function addItem($data): string
    {
        try {
            $item = $data;
            $validatedItem = Events::findOrfail($item->events_id)->only(["status"])['status'] === "Upcoming" ? true : false;
            if ($validatedItem)
            {
                $bucket = Bucket::create([
                    "users_id" => $this->userId,
                    "prices_id" => $item->id,
                    "events_id" => $item->events_id
                ]);
                if ($bucket){
                    http_response_code(200);
                    return 'Berhasil menambahkan item';
                }
                else{
                    http_response_code(400);
                    throw new \ErrorException('Terjadi kesalahan');
                }
            }
            else
            {
                http_response_code(400);
                throw new \ErrorException("Masa pendaftaran telah usai");
            }
        }
        catch (\ErrorException $exception)
        {
            return $exception->getMessage();
        }
    }

    public function removeItem($itemId): string
    {
        try {
            $data = Bucket::findOrFail($itemId);
            if ($data)
            {
                $data->delete();
                http_response_code(200);
                return 'Berhasil menghapus item.';
            }
            else{
                http_response_code(400);
                return \ErrorException('Terjadi Error. Silahkan ulangi kembali');
            }
        }
        catch (\ErrorException $exception)
        {
            return $exception->getMessage();
        }
    }

}
