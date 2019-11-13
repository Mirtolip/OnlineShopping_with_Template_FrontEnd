<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
    		'user_id', 'firstname', 'lastname', 'country', 'city', 'postcode', 'phone', 'email', 'billing', 'shipped',
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function products()
    {
    	return $this->belongsToMany('App\Product')->withPivot('quantity');
    }
}
