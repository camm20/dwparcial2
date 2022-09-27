<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    //Relacion uno a muchos
    public function gradeAssignment(){
        return $this->hasMany('App\Models\GradeAssignment');
    }

    //Relacion uno a muchos
    public function gradeTeacher(){
        return $this->hasMany('App\Models\GradeTeacher');
    }
}
