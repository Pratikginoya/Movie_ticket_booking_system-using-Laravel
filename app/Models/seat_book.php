<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seat_book extends Model
{
    protected $table = 'seat_book';
    protected $fillable = ['user_id','show_id','screen_no','seat_id','seat_no','price','status'];
}
