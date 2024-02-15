<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedBack extends Model
{
    use HasFactory;
    public $guarded = ['id'];
    protected $table = 'feedbacks';
    protected $primaryKey = 'id';
    protected $keyType  = 'int';
    public $timestamp = false; 
    public $incrementing = true;

    public function users(){
        return $this->belongsTo(User::class);
    }
}
