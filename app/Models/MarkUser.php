<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MarkUser extends Model
{
    use HasFactory;

    const SUCCESS = 'ناجح';

    const FAIL = 'راسب';
    protected $table = 'mark_users';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function isSuccess()
    {
        $userMark = $this->mark;
        $courseMark = $this->course->successRate;
        if($userMark >= $courseMark){
            return $this::SUCCESS;
        }
        return $this::FAIL;
    }
}
