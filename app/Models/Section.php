<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    //Relacion 1:n inversa
    public function lessons(){
        return $this->hasMany('App\Models\Lesson');
    }
    //Relacion 1:n inversa
    public function course(){
        return $this->belongsTo('App\Models\Course');
    }
}
