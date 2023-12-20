<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobseekerUser extends Model
{
    use HasFactory;

    protected $table = 'jobseeker_user'; 
  
    public function gender(){
        return $this->belongsTo(Gender::class,'gender');
    }
    public function location(){
        return $this->belongsTo(Location::class,'location');
    }
    public function job_level(){
        return $this->belongsTo(JobLevel::class,'job_level');
    }
    public function job_category(){
        return $this->belongsTo(JobCategory::class,'job_category');
    }
    public function org_type(){
        return $this->belongsTo(OrgType::class,'organization_type');
    }
    public function job_nature(){
        return $this->belongsTo(JobNature::class,'job_nature');
    }
    public function education(){
        return $this->belongsTo(Education::class,'education');
    }
}
