<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{

    protected $fillable = ['topic_id','comment','is_active','user_id'];

    public function topics()
    {
        return $this->belongsTo (Topics::class);
    }

    public function user()
    {
        return $this->belongsTo (User::class,'user_id');
    }
}
