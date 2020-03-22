<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = ['first_name', 'last_name', 'relation'];

    public function expenses()
    {
        return $this->hasMany(Expense::class);
    }
}
