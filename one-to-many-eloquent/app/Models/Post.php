<?php

namespace App\Models;

use App\Models\Author;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'category',
        'author_id'
    ];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
