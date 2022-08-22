<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserCertificate extends Model
{
    use HasFactory;

    protected $guarded=[];

    protected $table='user_certificates';

    public function user(){
        return $this->belongsTo(User::class);
    }
}
