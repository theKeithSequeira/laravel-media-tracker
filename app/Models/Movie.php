<?php

namespace App\Models;

use App\Models\Genre;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Movie extends Model
{
    use HasFactory;

    protected $table = "movies";

    protected $fillable = [
        'title',
        'release_date',
        'running_time',
        'language',
        'release_country'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The roles that belong to the Movie
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'movie_genre');
    }
}
