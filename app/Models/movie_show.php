<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movie_show extends Model
{
    protected $table = 'movie_show';
    protected $fillable = ['user_id','m_id','show_time','screen','date','gold','silver','platinum'];
}
