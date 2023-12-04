<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCategory extends Model
{
    use HasFactory;
    protected $table = 'job_catagories';

    public function jobpost()
    {
        return $this->belongsTo(JobPost::class);
    }
}
