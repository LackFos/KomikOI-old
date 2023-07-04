<?php

namespace Database\Seeders;

use App\Models\RecommendedComic;
use Illuminate\Database\Seeder;

class RecommendedComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RecommendedComic::create([
            'comic_id' => 1,
        ]);

        RecommendedComic::create([
            'comic_id' => 2,
        ]);
    }
}