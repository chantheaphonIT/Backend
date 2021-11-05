<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'body'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function author()
    {
        return $this->belongsTo(author::class);
    }
}
