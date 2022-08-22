<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Research extends Model
{
    use HasFactory;

    protected $guarded = [];


    public const PENDING = 0;

    public const BYUSER = 1;

    public const BYADMIN = 2;

    public function auther()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function visitors()
    {
        return $this->hasOne(Visitor::class);
    }
    public function status()
    {
        switch ($this->status) {

            case 0:
                'Pending';
                break;
            case 1:
                'Accepted';
                break;
            case 2:
                'AdminCreated';
                break;
        }
    }
    public function scopeAccepted($q)
    {   //2 => is Admin  , 1 => is User
        return $q->where('status', 1)->orWhere('status', 2);
    }
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

    public static function model(): Model
    {
        return new (get_class());
    }
    public static  function getPath()
    {
        return get_class(self::model());
    }
}
