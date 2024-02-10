<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedBack extends Model
{
    use HasFactory;
    public $guarded = ['id'];

    public function users(){
        return $this->belongsTo(User::class);
    }
}
