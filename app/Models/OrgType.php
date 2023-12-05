<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrgType extends Model
{
    use HasFactory;
    protected $table = 'organization_type';

    // public function jobpost()
    // {
    //     return $this->belongsTo(JobPost::class);
    // }
}
