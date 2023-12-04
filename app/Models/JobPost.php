<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    use HasFactory;
    protected $table = 'jobs';

    public function employeruser()
    {
        return $this->belongsTo(EmployerUser::class);
    }

    public function subscription()
    {
        return $this->belongsTo(Subscription::class);
    }

    public function jobcategory()
    {
        return $this->belongsTo(JobCategory::class);
    }

    public function jobnature()
    {
        return $this->belongsTo(JobNature::class);
    }

    public function joblevel()
    {
        return $this->belongsTo(JobLevel::class);
    }

    public function orgtype()
    {
        return $this->belongsTo(OrgType::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

}
