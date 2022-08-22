<?php

namespace App\Models;

use App\Models\User;
use App\Models\PostCompatition;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Competition extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function prize_files()
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

    public function compatitionUser()
    {
        return $this->belongsToMany(User::class, 'competition_users');
    }


    public function isjoind($user_id){
        return $this->compatitionUser->pluck('pivot')->contains('user_id',$user_id);
    }


    public function members(){
        return $this->hasMany(CompetitionUser::class)->with('user');
    }
    public function postCompatition(){
        return $this->hasMany(PostCompatition::class);
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
