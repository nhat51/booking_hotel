<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;
    public function district(){
        $this->hasMany(District::class,'district_id','id');
    }

    public function street(){
        $this->hasMany(Street::class,'street_id','id');
    }

    public function ward(){
        $this->hasMany(Ward::class,'ward_id','id');
    }
}
