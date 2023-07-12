<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = [
        'title',
        'video_url',
        'description',
        'thumbnail',
        'section_id',
    ];

    // Define any relationships or additional methods as needed
}
