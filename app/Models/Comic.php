
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'description', 'cover_image', 'author_id'];

    public function chapters()
    {
        return $this->hasMany(Chapter::class);
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
