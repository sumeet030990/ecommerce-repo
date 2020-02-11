<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'price', 'description', 'category_id'
    ];

    /**
     * Product relation with Category
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo('App\Models\Category');
    }
}
