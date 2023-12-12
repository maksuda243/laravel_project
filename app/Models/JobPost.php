<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    use HasFactory;
    protected $table = 'jobs';

    public function employer() { 
      return $this->belongsTo(EmployerUser::class, 'employer_id');
    }

    public function serviceType() {
        return $this->belongsTo(Subscription::class, 'service_type');
    }

    public function jobCategory(){
        return $this->belongsTo(JobCategory::class, 'job_categories');
    }

    public function jobLevel(){
        return $this->belongsTo(JobLevel::class, 'job_level');
    }

    public function jobNature(){
        return $this->belongsTo(JobNature::class, 'job_nature');
    }

    public function organizationType(){
        return $this->belongsTo(OrgType::class, 'organization_type');
    }

    public function jobLocation(){
        return $this->belongsTo(Location::class, 'locations');
    }

}
