<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booked extends Model
{
    protected $table='booked';
    protected $fillable=['user_id','show_id','all_seat_no','total_seats','total_pay','status'];
}
