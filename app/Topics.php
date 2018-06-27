<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topics extends Model
{
    public function comments()
    {
        return $this->hasMany (Comments::class);
    }
}
