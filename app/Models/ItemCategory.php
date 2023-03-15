<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ItemCategory extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    protected $fillable = [
        'category'
    ];

    /**
     * Get the items for the category post.
     */
    public function items(): HasMany
    {
        return $this->hasMany(Item::class);
    }
}
