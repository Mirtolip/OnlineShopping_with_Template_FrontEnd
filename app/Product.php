<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    		'slug', 'name', 'description', 'quantity', 'price', 'image'
    ];

    public function categories()
    {
    	return $this->belongsToMany('App\Category');
    }
}
