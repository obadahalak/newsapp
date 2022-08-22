<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CompetitionUser extends Model
{
    use HasFactory;
    protected $table='competition_users';
    protected $guarded=[];

    public function user(){
        return $this->belongsTo(User::class)->with('postCompetition');
    }
}
