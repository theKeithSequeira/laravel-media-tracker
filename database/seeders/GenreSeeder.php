<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Genre::factory(10)->create();

        foreach (range(1, 10) as $index) {
            DB::table('movie_genre')->insert([
                'movie_id' => rand(1, 10),
                'genre_id' => rand(1, 10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
