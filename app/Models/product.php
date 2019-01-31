<?php

namespace App\Models;

use function foo\func;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class product extends Model implements HasMedia
{
    use HasMediaTrait;


    protected $guarded = [];



    protected static function boot()
    {
        parent::boot();

        static::creating(function($product){
            $product->slug = str_slug($product->title);

        });
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category(){
        return $this->hasOne(Category::class);

}
}
