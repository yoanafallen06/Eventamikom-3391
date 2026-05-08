<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Event;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $categoryCount = (int) env('SEED_CATEGORIES', 10);
        $eventCount = (int) env('SEED_EVENTS', 30);
        $transactionCount = (int) env('SEED_TRANSACTIONS', 25);

        User::firstOrCreate(
            ['email' => 'admin@amikom.ac.id'],
            [
                'name' => 'Admin Amikom',
                'password' => bcrypt('password'),
                'role' => 'admin',
            ]
        );

        $this->command->info("Creating {$categoryCount} categories...");
        $this->command->info("Creating {$eventCount} events...");
        $this->command->info("Creating {$transactionCount} transactions...");

        Category::factory()->count($categoryCount)->create();

        Event::factory()->count($eventCount)->create();

        Transaction::factory()->count($transactionCount)->create();

        $this->command->info('Database seeded successfully!');
    }
}