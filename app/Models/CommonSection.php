<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommonSection extends Model
{
    use HasFactory;

    const MARKETING='1'; // تسوويق
    const JOBADS='2'; //  اعلانات الوظائف
    const IFMISEVENT ='3';  /// فعاليات الأتحاد الدولي
    const STADIUMRESERVATION='4'; ///  حجز الملاعب
    const SPORTSINVESTMENTSADS='5';  /// اعلانات الأستثمار الرياضي

    protected $guarded=[];

    protected $hidden=['created_at','updated_at'];

public function gettypeAttribute($value)
{
        switch($value){

        case '1': return 'MARKETING' ; break;
        case '2': return 'JOBADS' ; break;
        case '3': return 'IFMISEVENT' ; break;
        case '4': return 'STADIUMRESERVATION' ; break;
        case '5': return 'SPORTSINVESTMENTSADS' ; break;
    }
}
public function gettypeArAttribute($value)
{
        switch($value){

        case '1': return 'MARKETING' ; break;
        case '2': return 'JOBADS' ; break;
        case '3': return 'IFMISEVENT' ; break;
        case '4': return 'STADIUMRESERVATION' ; break;
        case '5': return 'SPORTSINVESTMENTSADS' ; break;
    }
}

    public function images()
    {
        return $this->morphMany(photo::class, 'photoable');
    }
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function likes()
    {
        return $this->morphMany(Like::class, 'likeable');
    }

    public function Mylikes()
    {
        return $this->morphMany(Like::class, 'likeable')->where('user_id', auth('sanctum')->id());
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
