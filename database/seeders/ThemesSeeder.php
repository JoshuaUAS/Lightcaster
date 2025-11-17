<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThemesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $themes = [
            [
                'name' => 'Classic White',
                'font_family' => 'Arial',
                'font_size' => 72,
                'text_color' => '#FFFFFF',
                'background_color' => 'transparent',
                'text_align' => 'center',
                'has_shadow' => true,
                'has_outline' => false,
            ],
            [
                'name' => 'Bold Yellow',
                'font_family' => 'Arial Black',
                'font_size' => 80,
                'text_color' => '#FFD700',
                'background_color' => '#000000',
                'text_align' => 'center',
                'has_shadow' => true,
                'has_outline' => false,
            ],
            [
                'name' => 'Elegant Serif',
                'font_family' => 'Georgia',
                'font_size' => 68,
                'text_color' => '#FFFFFF',
                'background_color' => 'transparent',
                'text_align' => 'center',
                'has_shadow' => true,
                'has_outline' => true,
            ],
            [
                'name' => 'Modern Clean',
                'font_family' => 'Helvetica',
                'font_size' => 70,
                'text_color' => '#FFFFFF',
                'background_color' => '#1F2937',
                'text_align' => 'center',
                'has_shadow' => true,
                'has_outline' => false,
            ],
        ];

        DB::table('themes')->insert($themes);

        $this->command->info('Created 4 default presentation themes');
    }
}
