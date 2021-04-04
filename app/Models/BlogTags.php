<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogTags extends Model
{
    use HasFactory;
    protected $table = 'blog_tags';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function blogs(){
        return $this->belongsTo(Blogs::class,'blog_id','id');
    }
}
