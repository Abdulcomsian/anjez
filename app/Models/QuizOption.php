<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuizOption extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'quiz_options';
    protected $fillable =
    [
        'option1',
        'option2',
        'option3',
        'option4',
        'correct_answer',
        'correct_answer_description',
        'option1_ar',
        'option2_ar',
        'option3_ar',
        'option4_ar',
        'correct_answer_ar',
        'correct_answer_description_ar',
        'quiz_id'
    ];
}
