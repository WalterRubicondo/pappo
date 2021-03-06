<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = [
        'name',
        'desciption',
        'user_id',
        'slug',
        'address',
        'photo',
      ];
      
      public function user(){
        return $this->hasMany('App\User');
    }

      public function categories(){
        return $this->belongsToMany('App\Category', 'category_restaurant');
      }   
}
