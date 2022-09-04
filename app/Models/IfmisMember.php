<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IfmisMember extends Model
{
    use HasFactory;
    protected $hidden=['created_at','updated_at'];
    protected $guarded=[];

    public function getimageProfile(){
        return 'http://aurora-team.com/newsApp/public/storage/'. $this->imageProfile;

    }


    public function getimageFlag(){
        return 'http://aurora-team.com/newsApp/public/storage/'. $this->imageFlag;
    }
}
