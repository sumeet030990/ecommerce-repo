<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id','first_name','last_name', 'email', 'address','total'
    ];

    /**
     * Order relation with OrderItems
     * 
     * @return HasMany
     */
    public function items(): HasMany
    {
        return $this->hasMany('App\Models\OrderItem');
    }

}
