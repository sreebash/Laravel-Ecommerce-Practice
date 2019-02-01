<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Category
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Category[] $child_category
 * @property-read \App\Models\Category $parent_category
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\product[] $products
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category query()
 * @mixin \Eloquent
 */
class Category extends Model
{
    protected $guarded = [];



    protected static function boot()
    {
        parent::boot();
        static::creating(function($category){
            $category->slug = str_slug($category->name);

        });
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent_category(){
        return $this->belongsTo(__CLASS__);
    }

    public function child_category(){
        return $this->hasMany(__CLASS__);
    }

    public function products(){
        return $this->hasMany(product::class);
    }



}


