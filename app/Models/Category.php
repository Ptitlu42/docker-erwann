<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Todo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    const DEFAULT_CATEGORIES = ['Work', 'IT', 'Home', 'Shopping', 'Friends', 'Tonight'];

    use HasFactory;

    public function todos(): HasMany
    {
        return $this->hasMany(Todo::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
