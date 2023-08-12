<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory, SoftDeletes;

    const PATH = 'assets/courses-content/course-images/';
    protected $fillable = ['title', 'price', 'status', 'description','title_ar', 'price_ar', 'status_ar', 'description_ar', 'feature_image', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sections () :HasMany
    {
        return $this->hasMany(Section::class);
    }
}
