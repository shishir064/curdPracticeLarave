<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    /** @use HasFactory<\Database\Factories\TagFactory> */
    use HasFactory;

    protected $table = 'tags';
    protected $fillable = [
        'tag',
    ];

    public function posts()
    {
        return $this->belongsToMany(Post::class);
        
    }
}
