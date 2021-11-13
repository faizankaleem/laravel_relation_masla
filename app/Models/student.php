<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    public function course()
    {
        return $this->belongsToMany(course::class,'course_students','course_id','student_id');

    }
}
