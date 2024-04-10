<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Service;

class ServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Service::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'uuid' => $this->faker->uuid(),
            'name' => $this->faker->name(),
            'slug' => $this->faker->slug(),
            'content' => $this->faker->paragraphs(3, true),
            'featured_image' => $this->faker->word(),
            'order' => $this->faker->word(),
            'meta_title' => $this->faker->word(),
            'meta_keywords' => $this->faker->word(),
            'meta_descriptions' => $this->faker->text(),
            'meta_og_image' => $this->faker->word(),
            'meta_og_url' => $this->faker->word(),
            'status' => $this->faker->word(),
        ];
    }
}
