<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelComments extends Model
{
    use HasFactory;
    protected $table = 'hotel_comments';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function hotels(){
        return $this->belongsTo(Hotels::class,'hotel_id','id');
    }
}
