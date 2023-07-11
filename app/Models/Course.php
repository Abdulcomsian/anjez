<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes;

    const PATH = 'assets/courses/';
    protected $fillable = ['title', 'price', 'status', 'description', 'feature_image', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function courseSections () :HasOne
    {
        return $this->hasOne(Section::class);
    }
}
