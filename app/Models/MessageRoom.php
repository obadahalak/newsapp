<?php

namespace App\Models;

use App\Models\Room;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MessageRoom extends Model
{
    use HasFactory;

    protected $guarded=[];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function room(){
        return $this->belongsTo(Room::class);
    }

    public function join_User(){
        return $this->hasMany(JoinRoom::class,'room_id');
    }
    public function Listjoin_User($id){
        return $this->hasMany(JoinRoom::class,'room_id')->where('room_id',$id);
    }

}
