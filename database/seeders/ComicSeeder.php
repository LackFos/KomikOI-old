<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comic = Comic::create([
            'title' => 'Yuan Zun',
            'slug' => 'yuan-zun',
            'image' => '/storage/comics/yuan-zun/thumbnail.webp',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi sit, magni atque harum odio aspernatur doloremque provident deleniti laboriosam ducimus sequi distinctio at corrupti ut!',
            'type_id' => 2,
            'status_id' => 1,
        ]);
        $comic->genres()->sync([1, 2]);

        $comic = Comic::create([
            'title' => 'I\'m Godfather in Another World',
            'slug' => 'im-godfather-in-another-world',
            'image' => '/storage/comics/im-godfather-in-another-world/thumbnail.webp',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi sit, magni atque harum odio aspernatur doloremque provident deleniti laboriosam ducimus sequi distinctio at corrupti ut!',
            'type_id' => 2,
            'status_id' => 1,
        ]);
        $comic->genres()->sync([1, 2]);
    }
}