<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppliedJob extends Model
{
    use HasFactory;
    protected $table = 'applied_jobs';
    public function job() { 
        return $this->belongsTo(JobPost::class, 'job_id');
    }
    public function jobseeker() { 
        return $this->belongsTo(JobseekerUser::class, 'jobseeker_id');
    }
}
