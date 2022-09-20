<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Adminn extends Authenticatable
{
    use HasFactory;
    protected $connection = 'superAdmin';

    protected $table = 'adminns';
    protected $guarded = [];
}
