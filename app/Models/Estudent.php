<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudent extends Model
{
    use HasFactory;


    //Relacion uno a muchos
    public function gradeAssignment(){
        return $this->hasMany('App\Models\GradeAssignment');
    }
}
