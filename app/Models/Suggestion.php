<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function setFileAttribute($value) {

        $this->attributes['file'] = 'suggestionFile/'.$value->hashName();
      }
}
