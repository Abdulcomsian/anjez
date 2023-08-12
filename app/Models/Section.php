<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Section extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'sections';

    protected $fillable = ['id', 'title', 'status','title_ar', 'status_ar', 'course_id'];

    public function course() :BelongsTo
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }

    public function lessons ():HasMany
    {
        return $this->hasMany(Lesson::class);
    }
}
