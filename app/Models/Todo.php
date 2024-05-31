<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Category;


class Todo extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $assignable = ['name', 'description'];
    protected $fillable = ['name', 'description', 'user_id', 'category_id'];

    /**
     * Get the category that owns the todo.
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
