<?php

namespace App\Models;

use App\Models\Comment;
use App\Models\JoinRoom;
use App\Models\MarkUser;
use App\Models\Competition;
use Illuminate\Support\Str;
use App\Models\CompetitionUser;
use App\Models\PostCompatition;
use App\Models\UserCertificate;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;



class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
   public const DEFUALTIMAGE='profileImage/defaultImage.png';

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public function markUser(){
        return $this->hasMany(MarkUser::class);
    }


    public function getMarkUser($courseId){
        return $this->hasMany(MarkUser::class)->where('course_id',$courseId)->take(1)->latest()->first()->mark;
    }

    public function postCompetition(){
        return $this->hasMany(PostCompatition::class);
    }
    public function compatitionUser()
    {
        return $this->belongsToMany(Competition::class, 'competition_users');
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    public function join_Room()
    {
        return $this->hasMany(JoinRoom::class);
    }
    public function dateOfJoinRoom($roomId){
        return $this->hasMany(JoinRoom::class)->where('room_id', $roomId)->first()->created_at;
    }
    public function leaveRoom($roomId)
    {
        return $this->hasMany(JoinRoom::class)->where('room_id', $roomId)->first();
    }
    public function userCertificate(){
        return $this->hasMany(UserCertificate::class);
    }

    // public function isJoin( $userId){
    //     return $this->join_User->contains('user_id',$userId->id);
    // }
}
