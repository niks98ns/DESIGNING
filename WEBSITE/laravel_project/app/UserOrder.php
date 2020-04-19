<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserOrder extends Model
{
    //
    protected $fillable = [
        'status', 'food_type', 'image', 'restaurant_id', 'user_id', 'menu_id',
        
    ];


    public function restaurant()
    {
        return $this->belongsTo('App\Restaurant');
    }

    public function menu()
    {
        return $this->belongsTo('App\Menu');
    }

    public function User()
    {
        return $this->belongsTo('App\User');
    }

     

}
