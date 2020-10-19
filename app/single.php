<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class single extends Model
{
    protected $fillable = [
    'name', 'email', 'phone',
  ];
}
