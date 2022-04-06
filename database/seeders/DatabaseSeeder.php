<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;
use App\Models\Author;
use App\Models\Book;
use App\Models\Content;
use App\Models\Mark;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Author::factory(5)->create();
        Book::factory(50)->create();
        Content::factory(300)->create();


        
    }
}
