<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    //Realcion 1:n inversa
    public function section(){
        return $this->belongsTo('App\Models\Section');
    }

    //Realcion 1:n inversa
    public function platform(){
        return $this->belongsTo('App\Models\Platform');
    }

    //Realcion 1:1 
    public function description(){
        return $this->hasOne('App\Models\Description');
    }

    //Realcion n:n 
    public function users(){
        return $this->belongsToMany('App\Models\User');
    }

    //Relacion 1:1 polimorfica
    public function resource(){
        return $this->morphOne('App\Models\Resource', 'resourceable');
    }

    //Relacion 1:n polimorfica
    public function comments(){
        return $this->morphMany('App\Models\Comment', 'commentable');
    }

    //Relacion 1:n polimorfica
    public function reactions(){
        return $this->morphMany('App\Models\Reaction', 'reactionable');
    }
}
