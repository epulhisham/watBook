<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('genres')->insert([
            'name' => 'Action'
        ]);

        DB::table('genres')->insert([
            'name' => 'Adventure'
        ]);

        DB::table('genres')->insert([
            'name' => 'Comedy'
        ]);

        DB::table('genres')->insert([
            'name' => 'Crime'
        ]);

        DB::table('genres')->insert([
            'name' => 'Drama'
        ]);

        DB::table('genres')->insert([
            'name' => 'Horror'
        ]);

        DB::table('genres')->insert([
            'name' => 'Sports'
        ]);

    }
}
