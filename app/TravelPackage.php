<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TravelPackage extends Model
{
     use SoftDeletes;

    Protected $fillable = [
        'name', 'price', 'description', 'region', 
        'city', 'image', 'latitude', 'longitude','slug'
    ];

    protected $hidden = [

    ];

    public function galleries(){
        return $this->hasMany(Gallery::class, 'travel_packages_id', 'id');
    }
}