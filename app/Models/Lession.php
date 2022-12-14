<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lession extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'lessions';
    public function images()
    {
        return $this->morphMany(photo::class, 'photoable');
    }
}
