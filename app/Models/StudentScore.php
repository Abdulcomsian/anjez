<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentScore extends Model
{
    use HasFactory;
    protected $table = 'student_scores';
    protected $fillable =
    [
        'lesson_id',
        'user_id',
        'score_taken',
        'total_score'
    ];
}
