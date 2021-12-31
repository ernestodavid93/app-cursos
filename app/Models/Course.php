<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'status'];
    protected $withCount = ['student', 'reviews'];

    const BORRADOR = 1;
    const REVISION = 2;
    const PUBLICADO = 3;

    public function getRatingAttribute(){
        if ($this->reviews_count) {
            return round($this->reviews->avg('rating'), 1);
        }
        else{
            return 5;
        }
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
    //Relacion 1:n
    public function reviews(){
        return $this->hasOne('App\Models\Review');
    }

    public function requirements(){
        return $this->hasMany('App\Models\Requirement');
    }

    public function goals(){
        return $this->hasMany('App\Models\Goal');
    }

    public function audience(){
        return $this->hasMany('App\Models\Audience');
    }

    public function sections(){
        return $this->hasMany('App\Models\Section');
    }

     //Relacion 1:n inversa
     public function teacher(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    //Relacion uno a muchos
    public function level(){
        return $this->belongsTo('App\Models\Level');
    }

     //Relacion uno a muchos
     public function category(){
        return $this->belongsTo('App\Models\Category');
    }

     //Relacion uno a muchos
     public function price(){
        return $this->belongsTo('App\Models\Price');
    }

    //Relacion n:n inversa
    public function student(){
        return $this->belongsToMany('App\Models\User');
    }

    //Relacion 1:n polimorfica
    public function image(){
        return $this->morphOne('App\Models\Image', 'imageable');
    }

    //Relacion 1:n polimorfica
    public function lessons(){
        return $this->hasManyThrough('App\Models\Lesson', 'App\Models\Section');
    }
}
