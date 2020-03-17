<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title', 'category_icon_id'];

    public function icon()
    {
        return $this->belongsTo(Icon::class);
    }
}
