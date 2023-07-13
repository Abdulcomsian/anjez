<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $table = 'lessons';
    const PATH = 'assets/courses-content/lesson-images/';

    protected $fillable = [
        'title',
        'video_url',
        'description',
        'thumbnail',
        'section_id',
    ];

    // Define any relationships or additional methods as needed
}
