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
        'quiz_id'
    ];
}
