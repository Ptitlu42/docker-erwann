<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    const DEFAULT_TAGS = ['fun', 'personal', 'professional', 'highlight'];
    use HasFactory;

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
