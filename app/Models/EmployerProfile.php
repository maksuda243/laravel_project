<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployerProfile extends Model
{
    use HasFactory;
    protected $table= 'employer_user';

    public function orgtype(){
        return $this->belongsTo(OrgType::class,'organization_type');
    }
    public function location(){
        return $this->belongsTo(Location::class,'location');
    }
    public function jobcategory(){
        return $this->belongsTo(JobCategory::class,'industry');
    }
}
