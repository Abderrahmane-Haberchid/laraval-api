<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
     protected $fillable = [
        'title',
        'content',
        'created_at',
        'updated_at',
    ];  
}
