<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['id', 'user_id', 'thumbnail',  'name', 'price', 'video'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

  }