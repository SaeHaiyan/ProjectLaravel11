<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    protected $fillable = ['title', 'author', 'body'];
    use HasFactory;

    public function author():BelongsTo
    {
        return $this->belongsto(User::class, 'author_id');
    }


    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}

