<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    protected $table = 'movie';
    protected $fillable = ['name','director','language','duration','release_date','rating','movie_image','status'];
}
