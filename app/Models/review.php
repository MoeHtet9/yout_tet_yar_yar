<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Post;

class review extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table = 'reviews';
    protected $fillable = [
        'description',
        'post_id'
    ];
    
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

}
