<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sroom extends Model
{
    use SoftDelete;
    protected $fillable = [
    'room_one', 'room_two', 'room_three', 'room_four', 'room_five', 'room_six', 'room_seven', 'room_eight', 'room_nine', 'room_ten', 'room_eleven', 'room_twelve'
  ];
}
