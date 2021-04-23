<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Psy\Util\Str;

class District extends Model
{
    use HasFactory;
   public function province(){
       $this->belongsTo(Province::class,'province_id','id');
   }
   public function ward(){
       $this->hasMany(Ward::class,'ward_id','id');
   }
   public function street(){
       $this->hasMany(Street::class,'street_id','id');
   }


}
