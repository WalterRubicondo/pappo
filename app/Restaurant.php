<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = [
        'id',
        'name',
        'description',
        'user_id',
        'slug',
        'address',
        'telephone_number',
        'photo',
      ];
      
      public function user(){
        return $this->hasMany('App\User');
      }

      public function categories(){
        return $this->belongsToMany('App\Category', 'category_restaurant');
      } 

      public function foods(){
        return $this->belongsTo('App\Food');
      }

      public function orders(){
        return $this->belongsTo('App\Order');
      }

}
