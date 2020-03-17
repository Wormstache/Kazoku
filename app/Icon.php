<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Icon extends Model
{
    protected $fillable = ['title', 'image', 'slug'];

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public static function boot()
    {
        parent::boot();

        static::saving(function ($icon) {
            $icon->slug = self::getSlug($icon);
        });
    }

    public static function getSlug($icon)
    {
        $count  = 0;
        $unique = false;
        $prefix = str_slug($icon->title);
        $slug   = "";

        while ( ! $unique) {
            $slug   = $count > 0 ? $prefix . '-' . $count : $prefix;
            $unique = self::where('slug', $slug)->count() == 0;
            $count ++;
        }

        return $slug;
    }
}
