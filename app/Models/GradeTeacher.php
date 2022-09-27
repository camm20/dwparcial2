<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GradeTeacher extends Model
{
    use HasFactory;

    //Relacion uno a muchos (inversa)
    public function grade(){
        return $this->belongsTo('App\Models\Grade');
    }

}
