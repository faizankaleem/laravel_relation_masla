<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;

    public function company()
    {
        return $this->hasOne(company::class,'emp_id','id');
    }
    public function email()
    {
        return $this->hasMany(email::class,'emp_id','id');
    }
}
