<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobNature extends Model
{
    use HasFactory;

    protected $table = 'job_natures';

    protected $fillable = ['name'];

    public function jobpost()
    {
        return $this->belongsTo(JobPost::class);
    }
}
