<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    public function employee(){
        return $this->belongsTo(EmployerUser::class,'employer_id','id');
    }
}
