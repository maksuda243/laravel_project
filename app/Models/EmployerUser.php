<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class EmployerUser extends Model
{
    use HasFactory;
    protected $table = 'employer_user'; 


    public function profile()
    {
        return $this->hasOne(EmployerProfile::class, 'employer_id');
    }

}
