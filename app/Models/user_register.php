<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_register extends Model
{
    protected $table='user_register';
    protected $fillable=['name','email','password','mobile'];
}
