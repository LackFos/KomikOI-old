<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Database\Seeders\TypeSeeder;
use Database\Seeders\ComicSeeder;
use Database\Seeders\GenreSeeder;
use Database\Seeders\StatusSeeder;
use Database\Seeders\ChapterSeeder;
use Database\Seeders\ChapterImageSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(StatusSeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(GenreSeeder::class);
        $this->call(ComicSeeder::class);
        $this->call(ChapterSeeder::class);
        $this->call(ChapterImageSeeder::class);
        $this->call(RecommendedComicSeeder::class);
    }
}