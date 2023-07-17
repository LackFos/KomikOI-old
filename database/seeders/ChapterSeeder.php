<?php

namespace Database\Seeders;

use App\Models\Chapter;
use Illuminate\Database\Seeder;

class ChapterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Chapter::create([
            'comic_id' => 1,
            'slug' => 'yuan-zun/chapter-1',
            'number' => '1'
        ]);

        Chapter::create([
            'comic_id' => 1,
            'slug' => 'yuan-zun/chapter-2',
            'number' => '2'
        ]);

        Chapter::create([
            'comic_id' => 1,
            'slug' => 'yuan-zun/chapter-3',
            'number' => '3'
        ]);

        Chapter::create([
            'comic_id' => 1,
            'slug' => 'yuan-zun/chapter-4',
            'number' => '4'
        ]);
    }
}