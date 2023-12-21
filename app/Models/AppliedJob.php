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
    public function employer() { 
        return $this->belongsTo(EmployerProfile::class, 'employer_id');
    }
    public function genders() { 
        return $this->belongsTo(JobseekerProfile::class, 'gender');
    }
    public function religions() { 
        return $this->belongsTo(JobseekerProfile::class, 'religion');
    }
    public function job_Natures(){
        return $this->belongsTo(JobNature::class,'job_nature');
    }
    public function job_Level(){
        return $this->belongsTo(JobLevel::class,'job_level');
    }
    public function org_type(){
        return $this->belongsTo(OrgType::class,'organization_type');
    }
    public function locations(){
        return $this->belongsTo(Location::class,'location');
    }
}
