<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'price', 'status', 'description', 'feature_image', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
