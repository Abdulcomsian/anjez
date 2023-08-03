<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'lessons';
    const PATH = 'assets/courses-content/lesson-images/';

    protected $fillable = [
        'title',
        'video_url',
        'description',
        'thumbnail',
        'section_id',
    ];

    public function quizes () :HasMany
    {
        return $this->hasMany(Quiz::class);
    }

    public function quiz_scores()
    {
        return $this->hasOne(StudentScore::class)->latest();
    }
}
