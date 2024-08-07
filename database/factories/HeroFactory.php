<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Hero;

class HeroFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Hero::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'image' => $this->faker->imageUrl(),
            'title' => $this->faker->sentence(4),
            'subtitle' => $this->faker->word(),
            'link1' => $this->faker->url(),
            'link2' => $this->faker->url(),
            'is_active' => $this->faker->boolean(),
        ];
    }
}
