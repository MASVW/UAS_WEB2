<?php

namespace App\Services;

use App\Models\Position;
use Illuminate\Support\Collection;

class PositionService
{
    public function getAllPosition()
    {
        return Position::all();
    }
    public function getPositionNameById($id)
    {
        return Position::findOrfail($id)->only('desc')['desc'];
    }
}
