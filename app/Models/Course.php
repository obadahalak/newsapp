<?php

namespace App\Models;

use App\Models\Like;
use App\Models\Quiz;
use App\Models\Comment;
use App\Models\Lession;
use App\Models\Category;
use App\Http\services\LikeService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
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

    public function disLikes()
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
    public function Lessions(){
        return $this->hasMany(Lession::class);
    }
    public function get_Lessions(){
        return $this->hasMany(Lession::class)->with('images');
    }
    public function Quizze(){
        return $this->hasMany(Quiz::class);
    }

    public static function model(): Model
    {
        return new (get_class());
    }
    public  static function getPath()
    {
        return get_class(self::model());
    }

}
