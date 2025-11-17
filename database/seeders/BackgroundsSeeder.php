<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BackgroundsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $backgrounds = [
            [
                'name' => 'Solid Black',
                'file_path' => 'backgrounds/solid-black.jpg',
                'thumbnail_path' => 'backgrounds/thumbnails/solid-black-thumb.jpg',
            ],
            [
                'name' => 'Dark Gradient',
                'file_path' => 'backgrounds/dark-gradient.jpg',
                'thumbnail_path' => 'backgrounds/thumbnails/dark-gradient-thumb.jpg',
            ],
            [
                'name' => 'Blue Abstract',
                'file_path' => 'backgrounds/blue-abstract.jpg',
                'thumbnail_path' => 'backgrounds/thumbnails/blue-abstract-thumb.jpg',
            ],
        ];

        DB::table('backgrounds')->insert($backgrounds);

        $this->command->info('Created 3 placeholder backgrounds');
    }
}
