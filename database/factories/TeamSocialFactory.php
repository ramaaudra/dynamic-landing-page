<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Team;
use App\Models\TeamSocial;

class TeamSocialFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TeamSocial::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'link' => $this->faker->url(),
            'type' => $this->faker->randomElement(["facebook","twitter","linkedin","instagram"]),
            'team_id' => Team::factory(),
        ];
    }
}
