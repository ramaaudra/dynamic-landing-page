<?php

namespace Database\Seeders;

use App\Models\TeamSocial;
use Illuminate\Database\Seeder;

class TeamSocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TeamSocial::factory()->count(5)->create();
    }
}
