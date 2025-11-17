<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->command->info('Starting database seeding...');

        // Seed Bible books first (referenced by Bible verses)
        $this->call(BibleBooksSeeder::class);

        // Seed presentation themes
        $this->call(ThemesSeeder::class);

        // Seed backgrounds
        $this->call(BackgroundsSeeder::class);

        // Seed songs (references themes and backgrounds)
        $this->call(SongsSeeder::class);

        // Seed Bible verses (largest dataset, run last)
        $this->call(BibleVersesSeeder::class);

        // Create default admin user
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
        ]);

        $this->command->info('✓ Database seeding completed successfully!');
        $this->command->info('✓ Default user: admin@example.com');
    }
}
