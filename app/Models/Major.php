<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    use HasFactory;

    public function classrooms(){
        return $this->hasMany(Classroom::class);
    }

    public function faculty(){
        return $this->belongsTo(Faculty::class);
    }
}
