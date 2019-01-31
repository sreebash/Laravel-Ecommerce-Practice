<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $guarded = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customer(){
        return $this->belongsTo(User::class);
    }

    public function processor(){
        $this->hasOne(User::class, 'processed_by');
    }

    public function products(){
        return $this->hasMany(OrderProduct::class);
    }

}
