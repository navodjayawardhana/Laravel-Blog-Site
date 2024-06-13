<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Optionally, you can define fillable attributes to allow mass assignment
    protected $fillable = [
        'user_id',
        'title',
        'description',
        // Add other columns that are fillable
    ];

    // Optionally, define relationships with other models
    // For example, if a post belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
