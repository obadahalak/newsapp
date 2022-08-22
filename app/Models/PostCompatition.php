<?php

namespace App\Models;

use App\Models\User;
use App\Models\Competition;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PostCompatition extends Model
{
    use HasFactory;

    protected $table='post_compatitions';

    protected $guarded=[];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function compatition(){
        return $this->belongsTo(Competition::class);
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


    public static function model(): Model
    {
        return new (get_class());
    }
    public static  function getPath()
    {
        return get_class(self::model());
    }

}
