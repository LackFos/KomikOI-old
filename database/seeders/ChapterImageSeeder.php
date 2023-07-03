<?php

namespace Database\Seeders;

use App\Models\ChapterImage;
use Illuminate\Database\Seeder;

class ChapterImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ChapterImage::create([
            'chapter_id' => 1,
            'page_number' => 1,
            'url' => '/storage/comics/yuan-zun/chapter-1/1',
        ]);

        ChapterImage::create([
            'chapter_id' => 1,
            'page_number' => 2,
            'url' => '/storage/comics/yuan-zun/chapter-1/2',
        ]);

        ChapterImage::create([
            'chapter_id' => 1,
            'page_number' => 3,
            'url' => '/storage/comics/yuan-zun/chapter-1/3',
        ]);

        ChapterImage::create([
            'chapter_id' => 1,
            'page_number' => 4,
            'url' => '/storage/comics/yuan-zun/chapter-1/4',
        ]);

        ChapterImage::create([
            'chapter_id' => 1,
            'page_number' => 5,
            'url' => '/storage/comics/yuan-zun/chapter-1/5',
        ]);

        ChapterImage::create([
            'chapter_id' => 1,
            'page_number' => 6,
            'url' => '/storage/comics/yuan-zun/chapter-1/6',
        ]);

        ChapterImage::create([
            'chapter_id' => 1,
            'page_number' => 7,
            'url' => '/storage/comics/yuan-zun/chapter-1/7',
        ]);

        ChapterImage::create([
            'chapter_id' => 1,
            'page_number' => 8,
            'url' => '/storage/comics/yuan-zun/chapter-1/8',
        ]);

        ChapterImage::create([
            'chapter_id' => 1,
            'page_number' => 9,
            'url' => '/storage/comics/yuan-zun/chapter-1/9',
        ]);

        ChapterImage::create([
            'chapter_id' => 1,
            'page_number' => 10,
            'url' => '/storage/comics/yuan-zun/chapter-1/10',
        ]);
    }
}