<?php

namespace App\Models;

use App\Models\Location\Province;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotels extends Model
{
    use HasFactory;

    public function destinations(){
        return $this->belongsTo(Destinations::class,'destination_id','id');
    }
    public function province(){
        return $this->belongsTo(Province::class, 'city', 'id');
    }

    public function hotel_images(){
        return $this->hasMany(HotelImages::class,'hotel_id','id');
    }

    public function amenities(){
        return $this->belongsToMany('App\Models\Amenities');
    }

    public function hotel_comments(){
        return $this->hasMany(HotelComments::class,'hotel_id','id');
    }

    public function rooms(){
        return $this->hasMany(Rooms::class,'hotel_id','id');
    }
}
