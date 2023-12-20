<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobseekerUser extends Model
{
    use HasFactory;

    protected $table = 'jobseeker_user'; 
  
    public function genders(){
        return $this->belongsTo(Gender::class,'gender');
    }
    public function locations(){
        return $this->belongsTo(Location::class,'location');
    }
    public function job_Level(){
        return $this->belongsTo(JobLevel::class,'job_level');
    }
    public function job_categories(){
        return $this->belongsTo(JobCategory::class,'job_category');
    }
    public function org_type(){
        return $this->belongsTo(OrgType::class,'organization_type');
    }
    public function jobNature(){
        return $this->belongsTo(JobNature::class,'job_nature');
    }
    public function educations(){
        return $this->belongsTo(Education::class,'education');
    }
    public function religions(){
        return $this->belongsTo(Religion::class,'religion');
    }
}
