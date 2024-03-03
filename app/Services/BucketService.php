<?php

namespace App\Services;

use App\Models\Bucket;
use http\Env\Response;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Support\Facades\Request;
use PHPUnit\Exception;

class BucketService
{
    public function __construct(public int $userId)
    {
        if (auth()->check()) {
            $this->userId = auth()->user()->id;
        }
    }

    public function addItem($data): string
    {
        try {
            $item = $data;
            if ($item)
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
                    throw new \ErrorException('Terjadi Kesalahan');
                }
            }
            else
            {
                http_response_code(400);
                throw new \ErrorException('Terjadi Kesalahan');
            }
        }
        catch (\ErrorException $exception)
        {
            http_response_code(500);
            return 'Terjadi kesalahan. Ulangi bebrapa saat lagi';
        }
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
                http_response_code(200);
                return 'Berhasil menghapus item.';
            }
            else{
                http_response_code(400);
                return 'Terjadi Error. Silahkan ulangi kembali';
            }
        }
        catch (Exception $exception)
        {
            http_response_code(400);
            return 'Terjadi Error. Silahkan ulangi kembali';
        }
    }

}
