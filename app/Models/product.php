<?php

namespace App\Models;

use function foo\func;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

/**
 * App\Models\product
 *
 * @property-read \App\Models\Category $category
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\MediaLibrary\Models\Media[] $media
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\product query()
 * @mixin \Eloquent
 */
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
