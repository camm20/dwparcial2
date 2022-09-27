<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GradeAssignment extends Model
{
    use HasFactory;

    //Relacion uno a muchos (inversa)
    public function grade(){
        return $this->belongsTo('App\Models\Grade');
    }

    public function estudent(){
        return $this->belongsTo('App\Models\Estudent');
    }
}
