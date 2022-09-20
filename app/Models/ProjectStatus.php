<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectStatus extends Model
{
    use HasFactory;
    protected $connection = 'superAdmin';

    protected $table = 'project_statuses';
    protected $guarded = [];
}
