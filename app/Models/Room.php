<?php

namespace App\Models;

use App\Models\User;
use App\Models\JoinRoom;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Mailer\Event\MessageEvent;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Room extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function messages(){
        return $this->hasMany(MessageRoom::class,'room_id');
    }

    public function join_User(){
        return $this->hasMany(JoinRoom::class,'room_id');
    }

    public function joindBy( $userId){
        return $this->join_User->contains('user_id',$userId->id);
    }

}
