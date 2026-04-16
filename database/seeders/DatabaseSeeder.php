<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
    use App\Models\Slang;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        // Dummy users
        User::factory(2)->create();

        // Admin user
        User::updateOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'Admin',
                'password' => '$2y$12$o5LNkXwBVxtdAQ1d3FI/GOR4YMBqs2pXm.Op/zUZoaMboJcTPB/.W',
                'role' => 'admin',
                'created_at' => '2026-03-07 18:04:02',
                'updated_at' => '2026-03-07 18:04:02',
            ]
        );

        Slang::factory()->count(25)->create();

        // Approve all slangs for search functionality
        Slang::where('status', '!=', 'approved')->update(['status' => 'approved']);
    }
}
