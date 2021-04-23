<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    use HasFactory;
    public function district(){
        $this->belongsTo(District::class,'district_id','id');
    }

    public function province(){
        $this->belongsTo(Province::class,'province_id','id');
    }
}
