<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'uuid'=> $this->faker->uuid(),
           'title' => $this->faker->sentence(4),
           'slug' => $this->faker->slug(),
            'text_color' =>$this->faker->word(),
            'bg_color' =>$this->faker->word(),
        ];
    }
}
