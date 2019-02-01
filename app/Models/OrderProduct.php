<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\OrderProduct
 *
 * @property-read \App\Models\Order $order
 * @property-read \App\Models\product $products
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrderProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrderProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrderProduct query()
 * @mixin \Eloquent
 */
class OrderProduct extends Model
{
    protected $guarded = [];

    public $timestamps = false;

    public function order(){
        return $this->belongsTo(Order::class);
    }

    public function products(){
        return $this->belongsTo(product::class);
    }
}
