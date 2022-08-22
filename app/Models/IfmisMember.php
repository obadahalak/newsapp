<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IfmisMember extends Model
{
    use HasFactory;
    protected $hidden=['created_at','updated_at'];
    protected $guarded=[];

    public function getimageProfileAttribute($value){
        return config('app.url') .'/'. $value;

    }


    public function getimageFlagAttribute($value){
        return config('app.url') .'/'. $value;
    }
}
