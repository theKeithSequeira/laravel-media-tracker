<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $table="movies";

    protected $fillable=[
        'title',
        'release_date',
        'running_time',
        'language',
        'release_country'
    ];
}
