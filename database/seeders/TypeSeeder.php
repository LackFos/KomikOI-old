<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type::create([
            'name' => 'Manga',
            'slug' => 'manga'
        ]);

        Type::create([
            'name' => 'Manhua',
            'slug' => 'manhua'
        ]);

        Type::create([
            'name' => 'Manhwa',
            'slug' => 'manhwa'
        ]);
    }
}