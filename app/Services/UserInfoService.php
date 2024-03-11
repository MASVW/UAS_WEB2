<?php

namespace App\Services;

use App\Models\Bucket;
use App\Models\User;
use http\Env\Response;
use http\Exception\RuntimeException;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Redirect;
use Livewire\Features\SupportModels\EloquentCollectionSynth;
use mysql_xdevapi\Collection;

class UserInfoService
{
    public $errorService;
    public $id;
    public function __construct(ErrorService $errorServices, $userId)
    {
        $this->errorService = $errorServices;
        $this->id = $userId;
    }

    public function getUserById()
    {
        $id = $this->id;
        return User::findOrfail($id);
    }

    public function updateUserById()
    {

    }

    public function getHistory()
    {
        $id = $this->id;
        $history =  Bucket::where('users_id', 8)
            ->with('prices.positions', 'events', 'payments')
            ->get();
        if (count($history) == 0)
        {
            return "Anda belum melakukan transaksi";
        }
        else {
            $filteredCollection = $this->removeDuplicatePayments($history);
            return  $filteredCollection;
        }
        return $history;
    }
    public function removeDuplicatePayments($beforeCorrection)
    {
        $data = $beforeCorrection;
        $index = [];
        $correctionPayment = [];

        foreach ($data as $itemIndex => $item) {
            $found = false;

            foreach ($correctionPayment as $paymentId) {
                if ($paymentId == $item->payments->id) {
                    $found = true;
                    unset($data[$itemIndex]);
                    break;
                }
            }

            if (!$found) {
                $correctionPayment[] = $item->payments->id;
            }
        }
        return $data;
    }
}
