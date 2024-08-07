<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => '123123123'
        ]);


        $this->call([
            ClientSeeder::class,
            HeroSeeder::class,
            ContactSeeder::class,
            PortfolioCategorySeeder::class,
            PortfolioSeeder::class,
            ServiceSeeder::class,
            TeamSeeder::class,
            TeamSocialSeeder::class
        ]);
    }

}
