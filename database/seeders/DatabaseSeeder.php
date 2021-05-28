<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Database\Seeder;
use Database\Seeders\GenreSeeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        User::truncate();
        Genre::truncate();
        Movie::truncate();
        DB::table('movie_genre')->truncate();

        User::factory(10)->create();
        $this->call([
            GenreSeeder::class,
            MovieSeeder::class,
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
