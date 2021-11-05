<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $fillable =['name','age','province'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function book()
    {
        return $this->hasMany(book::class);
    }
}
