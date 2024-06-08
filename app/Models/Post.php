<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        "title",
        "lang"
    ];
    public function user()
    {
        return $this->belongsTo(User::class); //relation ship with users by user_id
    }
}
