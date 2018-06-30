<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topics extends Model
{

    protected $fillable = ['description','category','subcategory','is_active','user_id'];

    public function comments()
    {
        return $this->hasMany (Comments::class);
    }
}
