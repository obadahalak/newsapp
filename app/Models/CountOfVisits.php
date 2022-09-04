<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountOfVisits extends Model
{
    use HasFactory;

    protected $guarded=[];
    protected $table='count_of_visits';

}
