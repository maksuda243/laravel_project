<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    protected $table = 'subscriptions';

    // public function jobpost()
    // {
    //     return $this->belongsTo(JobPost::class);
    // }
}
