<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCategory extends Model
{
    use HasFactory;
    protected $table = 'job_catagories';
    public function jobs(){
        return $this->hasMany(JobPost::class, 'job_categories');
    }

   
}
