<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class review extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table = 'reviews';
    protected $fillable = [
        'description',
        'post_id'
    ];
}
