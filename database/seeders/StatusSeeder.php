<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Status::create([
            'name' => 'Ongoing',
            'slug' => 'ongoing'
        ]);

        Status::create([
            'name' => 'Hiatus',
            'slug' => 'hiatus'
        ]);

        Status::create([
            'name' => 'Tamat',
            'slug' => 'tamat'
        ]);
    }
}