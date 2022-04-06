<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $guarded =['id'];

    public function contents()
    {
        return $this->hasMany(Content::class);
    }

    public function authors()
    {
        return $this->belongsTo(Author::class, 'author_id');
    }

    public function genres()
    {
        return $this->belongsTo(Genre::class, 'genre_id');
    }


}
