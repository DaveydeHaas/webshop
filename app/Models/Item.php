<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'quantity',
        'price',
        'sale'
    ];

    /**
     * Get the item associated with the category.
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(ItemCategory::class);
    }
    /**
     * Get the pictures for the item post.
     */
    public function pictures(): HasMany
    {
        return $this->hasMany(ItemPicture::class);
    }

    /**
     * TODO SALES. (Has a start and end date)
     */

}
