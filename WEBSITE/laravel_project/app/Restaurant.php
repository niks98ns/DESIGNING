<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    //
    protected $fillable = [
        'name', 'email', 'password', 'address', 'user_id', 'restaurant_image',
    ];



    public function menu()
    {
        return $this->hasMany('App\Menu');
    }

    public function userOrders()
    {
        return $this->hasMany('App\userOrder');
    }

}
