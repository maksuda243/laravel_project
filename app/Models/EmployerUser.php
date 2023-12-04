<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class EmployerUser extends Model
{
    use HasFactory;
    protected $table = 'employer_user'; 


    public function employjobposter()
    {
        return $this->belongsTo(JobPost::class);
    }

}
