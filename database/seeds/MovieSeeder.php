<?php

use Illuminate\Database\Seeder;

use App\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            factory(Movie::class, 30) ->create();
        }
    }
}
