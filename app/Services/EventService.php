<?php

namespace App\Services;

use App\Models\Events;

class EventService
{
    public function getAllEvents() {
        return Events::all();
    }
}
