<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cinema_register extends Model
{
    protected $table = 'cinema_register';
    protected $fillable = ['owner','th_name','shopping','location','license','total_screen','email','mobile','password'];
}
