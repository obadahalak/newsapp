<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Psy\Readline\Hoa\_Protocol;

class News extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function images()
    {
        return $this->morphMany(photo::class, 'photoable');
    }


    public function likes()
    {
        return $this->morphMany(Like::class, 'likeable');
    }

    public function Mylikes()
    {
        return $this->morphMany(Like::class, 'likeable')->where('user_id', auth('sanctum')->id());
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public static function model(): Model
    {
        return new (get_class());
    }
    public static  function getPath()
    {
        return get_class(self::model());
    }
}
