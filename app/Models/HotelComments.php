<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

class HotelComments extends Model
{
    use HasFactory;
    protected $table = 'hotel_comments';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function hotels(){
        return $this->belongsTo(Hotels::class,'hotel_id','id');
    }
    public function users(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
