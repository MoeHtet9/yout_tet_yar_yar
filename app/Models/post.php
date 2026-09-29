<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class post extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table = 'posts';
    protected $filable = [
        'title',
        'description',
        'image',
        'category_id'
    ];
}
