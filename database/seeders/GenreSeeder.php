<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'Aksi',
            'slug' => 'aksi'
        ]);

        Genre::create([
            'name' => 'Bela Diri',
            'slug' => 'bela-diri'
        ]);

        Genre::create([
            'name' => 'Drama',
            'slug' => 'drama'
        ]);

        Genre::create([
            'name' => 'Fantasi',
            'slug' => 'fantasi'
        ]);

        Genre::create([
            'name' => 'Game',
            'slug' => 'game'
        ]);

        Genre::create([
            'name' => 'Harem',
            'slug' => 'harem'
        ]);

        Genre::create([
            'name' => 'Isekai',
            'slug' => 'isekai'
        ]);

        Genre::create([
            'name' => 'Komedi',
            'slug' => 'komedi'
        ]);

        Genre::create([
            'name' => 'Kultivasi',
            'slug' => 'kultivasi'
        ]);

        Genre::create([
            'name' => 'Metropolis',
            'slug' => 'metropolis'
        ]);

        Genre::create([
            'name' => 'Misteri',
            'slug' => 'misteri'
        ]);

        Genre::create([
            'name' => 'Murim',
            'slug' => 'murim'
        ]);

        Genre::create([
            'name' => 'Olahraga',
            'slug' => 'olahraga'
        ]);

        Genre::create([
            'name' => 'Romantis',
            'slug' => 'romantis'
        ]);

        Genre::create([
            'name' => 'Reinkarnasi',
            'slug' => 'reinkarnasi'
        ]);

        Genre::create([
            'name' => 'School Life',
            'slug' => 'school-life'
        ]);

        Genre::create([
            'name' => 'Zombie',
            'slug' => 'zombie'
        ]);
    }
}